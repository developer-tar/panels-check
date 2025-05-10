<?php

namespace App\Providers;

use App\Models\Claim;
use App\Models\Company;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $guard = app()->bound('activeGuard') ? app('activeGuard') : null;

            $user = $guard ? Auth::guard($guard)->user() : null;
            $media = null;
            $compyId = null;
            $totalBenefitEnrolled = null;
            $totalPendingBenefitEnrolled = null;
            $totalApprovedBenefit = null;
            $totalVendorPendingRequest = null;
            $totalVendorApprovedRequest = 0;
            $totalVendorRejectedRequest = 0;
            $totalNoOfEmployeeInCompany = 0;
            $totalNoOfClaimsEnrolledByEmp = 0;
            if ($user) {
                // Re-fetch the user to ensure relationships work properly (optional)
                $user = User::find($user->id);
                $media = $user->media()->where('folder_name', 'personal_profile')->first()?->path;

                $compyId = Company::where('id', $user?->company_id)->value('id');
                if ($compyId) {
                    $totalNoOfEmployeeInCompany = User::where('company_id', $compyId)->count();
                    $statuses = Claim::where('company_id', $compyId)
                        ->selectRaw('status, COUNT(*) as count')
                        ->groupBy('status')
                        ->pluck('count', 'status');
                    // $statuses->count());
                    $totalNoOfClaimsEnrolledByEmp = $statuses->count();
                    $totalVendorPendingRequest = $statuses[config('constants.user_approval_status.pending')] ?? 0;
                    $totalVendorApprovedRequest = $statuses[config('constants.user_approval_status.approved')] ?? 0;
                    $totalVendorRejectedRequest = $statuses[config('constants.user_approval_status.rejected')] ?? 0;
                }
                $user->load('claims'); // Only once

                $totalBenefitEnrolled = $user->claims->count();

                $totalApprovedBenefit = $user->claims
                    ->where('status', config('constants.user_approval_status.approved'))
                    ->count();

                $totalPendingBenefitEnrolled = $user->claims
                    ->where('status', config('constants.user_approval_status.pending'))
                    ->count();

            }

            $view->with(compact('user', 'media', 'guard', 'compyId', 'totalBenefitEnrolled', 'totalPendingBenefitEnrolled', 'totalApprovedBenefit', 'totalVendorPendingRequest', 'totalVendorApprovedRequest', 'totalVendorRejectedRequest', 'totalNoOfEmployeeInCompany', 'totalNoOfClaimsEnrolledByEmp'));
        });

        Gate::define('create-company', function (User $user) {

            return $user->isAdmin()
                ? Response::allow()
                : Response::deny('You must be an admin.');
        });
    }
}
