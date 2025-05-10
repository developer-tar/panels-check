@extends('layout.vendor.main')

@section('content')
  <div class="main-inner">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
    <h2 class="h2">Create a new plan</h2>

    </div>

    <div class="box mb-4 xxxl:mb-6">
    <div class="mb-6 pb-6 bb-dashed flex justify-between items-center">
      <h4 class="h4">Creating</h4>
    </div>
    <form method="post" action="{{ route('vendor.plan.store') }}">
      @csrf
      <input type="hidden" name="company_id" value="{{ $compyId ?? '' }}">
      <div class="grid grid-cols-2 gap-4 xxxl:gap-6">
      <div class="col-span-2 md:col-span-1">
        <label for="name" class="mb-4 md:text-lg font-medium block">
        Select Domain Name
        </label>
        <select name="domain_id" class="nc-select full">
        @foreach($domains as $domain)

        @if($domain != 'no record found')
        <option value="{{ $domain['id'] }}" {{ old('domain_id') == $domain['id'] ? 'selected' : '' }}>
        {{ $domain['name'] }}
        </option>
        @else
        <option value="" {{ old('domain_id') == 'no record found' ? 'selected' : '' }}>
        {{ ucfirst($domain) }}
        </option>
        @endif
      @endforeach

        </select>
        @error('domain_id')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>


      <div class="col-span-2 md:col-span-1">
        <label for="coverage_limit" class="mb-4 md:text-lg font-medium block">
        Coverage Limit($)
        </label>
        <input type="number"
        class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter coverage limit" id="coverage_limit" value="{{ old('coverage_limit')}}"
        name='coverage_limit' />
        @error('coverage_limit')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="start_period" class="mb-4 md:text-lg font-medium block">
        Start Period
        </label>
        <input type="text"
        class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter start period" id="start_period" value="{{ old('start_period')}}" name='start_period' />
        @error('start_period')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="end_period" class="mb-4 md:text-lg font-medium block">
        End Period
        </label>
        <input type="text"
        class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter end period" id="end_period" value="{{ old('end_period')}}" name='end_period' />
        @error('end_period')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>


      <div class="col-span-2 md:col-span-1">
        <label for="eliegibility_rules" class="md:text-lg font-medium block mb-4">
        Eligibility Rule
        </label>
        <textarea
        class="w-full text-sm  bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter eligibility rules..." rows="5" id="eliegibility_rules"
        name="eliegibility_rules">{{ old('eliegibility_rules') }}</textarea>
        @error('eliegibility_rules')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="customization_notes" class="md:text-lg font-medium block mb-4">
        Customization notes
        </label>
        <textarea
        class="w-full text-sm  bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter customization notes..." rows="5" id="customization_notes"
        name="customization_notes">{{ old('customization_notes') }}</textarea>
        @error('customization_notes')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>
      <div class="col-span-2 md:col-span-1 md:ltr:pr-5 md:rtl:pl-5 flex flex-col gap-4 xxl:gap-6">

        <div class="flex items-center justify-between">
        <div>
          <p class="font-medium text-base md:text-lg xl:text-xl mb-2">
          Automatic Reminder
          </p>
          <span class="text-xs md:text-sm">Automatic reminder for open enrollment user </span>
        </div>
        <div class="flex items-center justify-center">
    <label for="automatice_reminder" class="flex items-center cursor-pointer">
        <div class="relative">
            <!-- Hidden fallback for unchecked checkbox -->
            <input type="hidden" name="automatice_reminder" value="0">
            
            <input type="checkbox"
                   id="automatice_reminder"
                   name="automatice_reminder"
                   value="1"
                   class="custom-checkbox sr-only"
                   {{ old('automatice_reminder') ? 'checked' : '' }}>

            <div class="block w-14 h-8 rounded-full bg bg-primary/20"></div>
            <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition"></div>
        </div>
    </label>

    @error('automatice_reminder')
        <div class="text-red-500 text-sm mt-1">
            {{ $message }}
        </div>
    @enderror
</div>


        </div>

      </div>
     
      <div class="col-span-2 flex gap-4 md:gap-6 mt-2">
      @if($user?->status == config('constants.user_approval_status.approved'))
        <button class="btn-primary" type="submit">
        Save
        </button>

    
      @elseif($user?->status == config('constants.user_approval_status.pending'))
      <div class="text-blue-500 text-sm mt-1">
      Complete your profile and Wait for Admin decision  
        </div>
        @elseif($user?->status == config('constants.user_approval_status.rejected'))
        <div class="text-red-500 text-sm mt-1">
         Profile has been rejected
        </div>
        @endif
        </div>
       
    </form>
    </div>
  </div>
@endsection