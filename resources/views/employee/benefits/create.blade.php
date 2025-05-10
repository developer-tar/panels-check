@extends('layout.employee.main')

@section('content')
  <div class="main-inner">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
    <h2 class="h2">Take a new benefit enroll</h2>

    </div>

    <div class="box mb-4 xxxl:mb-6">
    <div class="mb-6 pb-6 bb-dashed flex justify-between items-center">
      <h4 class="h4">Applying a new Benefit for claim</h4>
    </div>
    <form method="post" enctype="multipart/form-data" action="{{ route('employee.benefit.store') }}">
      @csrf
      <div class="mb-6 flex flex-wrap items-center gap-5 xl:gap-10">

      <div class="flex gap-4">
        <input type="file" name="claim_file" id="claim_file" class="hidden" accept=".pdf,.docx,.txt"  />
        <label for="claim_file" class="btn-primary"> Upload Document </label>

      </div>
      <div class="flex">
 
      @error('claim_file')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>
      </div>
      <div class="col-span-2">

     
      <div class="col-span-2  md:col-span-1">

        <label for="company_id" class="mb-4 md:text-lg font-medium block">
        Select Company
        </label>
        <select name="company_id" id="company_id" class="nc-select full" onchange="checkValue()">
        <option selected disabled>Select Company</option>
        @if($companies->isNotempty())
        @foreach($companies as $company)
        <option 
            value="{{ $company['company_id'] }}-{{ $company['domain_id'] }}" 
            {{ old('company_id') == $company['company_id'] . '-' . $company['domain_id'] ? 'selected' : '' }}>
            {{ $company['name'] }}
        </option>
      @endforeach
      @else
      <option value="" selected disabled>No company exist for giving loan</option>
      @endif
        </select>
        @error('company_id')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>
    
      <div class="col-span-2">
        <label for="claim_amount_required" class="mb-4 md:text-lg font-medium block">
        Claim amount($)
        </label>
        <input type="number"
        class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter name" id="claim_amount_required"  name="claim_amount_required"   {{ old('claim_amount_required')}}/>
        @error('claim_amount_required')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>
      <div class="col-span-2 md:col-span-2">
        <label for="reason_for_takng_the_benefit" class="md:text-lg font-medium block mb-4">
        Reason for taking the benefits
        </label>
        <textarea
        class="w-full text-sm  bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Description for taking the benefit..." rows="5" id="reason_for_takng_the_benefit" name="reason_for_takng_the_benefit" >{{ old('reason_for_takng_the_benefit') }}</textarea>
      </div>
      <div class="col-span-2 flex gap-4 md:gap-6 mt-2">
        @if($user?->status == config('constants.user_approval_status.approved') && $user?->kyc_status == config('constants.user_approval_status.approved') && $companies->isNotEmpty())
        
        
        <button class="btn-primary" type="submit">
        Claim
        </button>
        
        @elseif($user?->status == config('constants.user_approval_status.pending') || $user?->kyc_status == config('constants.user_approval_status.pending'))
        <div class="text-blue-500 text-sm mt-1">
        Complete your profile and Wait for Admin decision 
        </div>
        
        @elseif($user?->status == config('constants.user_approval_status.rejected') && $user?->kyc_status == config('constants.user_approval_status.rejected'))
        <div class="text-red-500 text-sm mt-1">
         Profile has been rejected
        </div>
        @elseif($companies->isEmpty())
        <div class="text-red-500 text-sm mt-1">
         No company exist for providing loan
        </div>
        @else
        <div class="text-red-500 text-sm mt-1">
         Contact to admin
        </div>
        @endif

        <!-- <button data-modal-target="modal1" class="btn-primary" type="button">Comparison</button> -->
        <!-- Modal element -->
        <div id="modal1" class="fixed inset-0 items-center justify-center z-[99] hidden">
        <div class="f-center h-screen w-screen">
          <div class="bg-white rounded-lg shadow-xl p-6 m-4 max-w-xl w-full">
          <h2 class="text-2xl font-bold mb-4">Comparison</h2>
          {{-- Comparison Table --}}
          <div class="mt-10">

            <h4 class="h4 mb-4">Benefit Comparison Table Based on values added.</h4>
            <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left border border-gray-200 rounded-lg">
              <thead class="bg-gray-100 text-gray-700">

              <th class="px-4 py-3">company name</th>
              <th class="px-4 py-3">Domain name</th>
              <th class="px-4 py-3">Enrollment start</th>
              <th class="px-4 py-3">Enrollment end</th>
              <th class="px-4 py-3">Coverage limit</th>
              <th class="px-4 py-3">No of employee enrolled</th>
              </tr>
              </thead>
              <tbody class="divide-y divide-gray-200">
              <tr>
                <td class="px-4 py-3">Netset</td>
                <td class="px-4 py-3">Healthcare</td>
                <td class="px-4 py-3">2025-09-19</td>
                <td class="px-4 py-3">2026-09-19</td>
                <td class="px-4 py-3">1000$</td>
                <td class="px-4 py-3">10</td>

              </tr>
              <tr>
                <td class="px-4 py-3">Luminoguru</td>
                <td class="px-4 py-3">Healthcare</td>
                <td class="px-4 py-3">2026-09-19</td>
                <td class="px-4 py-3">2027-09-19</td>
                <td class="px-4 py-3">10000$</td>
                <td class="px-4 py-3">200</td>
              </tr>
              <!-- Add more rows as needed -->
              </tbody>
            </table>
            </div>
          </div>
          <div class="flex justify-end">
            <button data-modal-close="modal1"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Close</button>
          </div>
          </div>
        </div>
        </div>

      </div>
    </form>
    </div>
  </div>
@endsection
@push('script')
<script>

function checkValue() {
  let value = document.getElementById('company_id');
  const claimLimit = document.getElementById('claim_amount_required'); 
  value = value?.value
  
  fetch(`/get-coverage-limit/${value}`)
                    .then(response => {
                        if (!response.ok) throw new Error('Network response was not ok');
                        return response.json();
                    })
                    .then(data => {
                      claimLimit.value = data?.coverage_limit || '';
                        
                    })
                    .catch(error => {
                        console.error('Error fetching company data:', error);
                    });
}

</script>
@endpush
