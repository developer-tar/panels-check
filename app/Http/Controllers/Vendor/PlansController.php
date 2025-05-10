<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlanRequest;
use App\Models\Benefit;
use App\Models\User;
use App\Services\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PlansController extends Controller
{
    private $name = 'vendor';
    protected $companyService;
    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }
    public function index()
    {
        $benefit = Benefit::with('domain:id,name')->where('user_id',Auth::guard('vendor')->id())->first();
     
        return view($this->name . '.plans.index')->with('benefit', $benefit);
    }

    public function create()
    {
        $domains = $this->companyService->getCompanies('vendor');

        return view($this->name . '.plans.create')->with('domains', $domains);
    }

    public function edit($id)
    {
        return view($this->name . '.plans.edit');
    }
    public function store(PlanRequest $request)
    {
        try {
            $data = $request->except('_token');
            $data['user_id'] = Auth::guard('vendor')->user()->id;
            
            Benefit::create( $data);
            return redirect()->route($this->name.'.plan.index')->with('success', 'Benefit Created Successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return back()->with('error', config('constants.wrong_message'));
        }
    }

}