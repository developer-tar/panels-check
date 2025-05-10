<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Benefit;
use App\Models\Claim;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller {
    public function index() {
        return view('vendor.index');
    }
    public function activityLogs() {
        return view('vendor.activitylogs');
    }
    public function claimsBilling() {
        
   $claims = Claim::with(['media:id,model_id,path', 'company:id,company_name', 'domain:id,name'])
            ->where(['company_id'=> Auth::guard('vendor')->user()->company_id, 'status' => config('constants.user_approval_status.pending')])
            
            ->paginate(10)
            ->through(function ($claim) {
                $benefit = Benefit::select('coverage_limit', 'start_period', 'end_period')->where(['domain_id' => $claim?->domain?->id, 'company_id' => $claim?->company?->id])->first();
              
                return [
                    'path' => $claim?->media?->path,
                    'company_name' => $claim?->company?->company_name,
                    'domain_name' => $claim?->domain?->name,
                    'claim_amount' => $claim?->claim_amount_required,
                    'company_claim_amount' => $benefit?->coverage_limit,
                    'start_period' => $benefit?->start_period,
                    'end_period' => $benefit?->end_period,
                    'enrolled_at' => $claim?->created_at ? Carbon::parse($claim?->created_at)->diffForHumans() : null,
                    'id' => $claim->id,

                ];
            });
            
        return view('vendor.claims')->with('claims',$claims);
    }
    public function analytics() {
        return view('vendor.analytics');
    }

    public function approveStatus(Claim $claim) {
        $claim->status = config('constants.user_approval_status.approved'); // Or just 'approved'
        $claim->save();

        return back()->with('success', config('constants.warning_messge.claim_status.approval'));
    }

    public function rejectStatus(Claim $claim) {
        $claim->status = config('constants.user_approval_status.rejected'); // Or just 'rejected'
        $claim->save();

        return back()->with('success', config('constants.warning_messge.claim_status.rejected'));
    }
}
