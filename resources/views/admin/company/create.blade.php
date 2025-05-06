@extends('layout.admin.main')

@section('content')
<div class="main-inner">
  <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
    <h2 class="h2">Register a new Company</h2>

  </div>

  <div class="box mb-4 xxxl:mb-6">
    <div class="mb-6 pb-6 bb-dashed flex justify-between items-center">
      <h4 class="h4">Registering</h4>
    </div>
    <form method="POST" action="{{ route('admin.company.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-6 flex flex-wrap items-center gap-5 xl:gap-10">
        <!-- Fixed-size Image Preview -->
        <img id="imagePreview" src="{{ asset('assets/images/placeholder.png') }}"
          class="h-20 w-20 object-cover rounded border" alt="placeholder" />

        <div class="flex gap-4">
          <input type="file" name="path" id="photo" class="hidden" accept="image/*" />
          <label for="photo" class="btn-primary cursor-pointer">Upload Company Logo</label>
          <button type="button" class="btn-outline" onclick="resetImage()" id="resetbtn">Cancel</button>
        </div>
      </div>
      <div class="grid grid-cols-2 gap-4 xxxl:gap-6">
        <div class="col-span-2 md:col-span-1">
          <label for="name" class="mb-4 md:text-lg font-medium block">
            Name
          </label>
          <input type="text"
            class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter name" id="name" name="company_name" value="{{ old('company_name') }}" />
          @error('company_name')
          <div class="text-red-500 text-sm mt-1">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="col-span-2 md:col-span-1">
          <label for="domain_id" class="mb-4 md:text-lg font-medium block">
            Domain(optional)
          </label>

          <select class="nc-select full" name="domain_id" id="domain_id">
            <option value="" selected disabled>Select the Domain</option>
            @foreach($domains as $domain)
            <option value="{{ $domain->id}}" {{ old('domain_id') == $domain->id ? 'selected' : '' }}>{{ $domain->name }}</option>
            @endforeach
            <option value="other">Other</option>
          </select>
          @error('domain_id')
          <div class="text-red-500 text-sm mt-1">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="col-span-2 md:col-span-1">
          <label for="phone" class="mb-4 md:text-lg font-medium block">
            Phone (Optional)
          </label>
          <input type="text"
            class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter name" id="phone" name="phone" value="{{ old('phone') }}" />

        </div>

        <div class="col-span-2 md:col-span-1">
          <label for="email" class="mb-4 md:text-lg font-medium block">
            Email
          </label>
          <input type="text"
            class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter name" id="email" name="email" value="{{ old('email') }}" />
          @error('email')
          <div class="text-red-500 text-sm mt-1">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="col-span-2 md:col-span-1">
          <label for="type" class="mb-4 md:text-lg font-medium block">
            type
          </label>
          <select class="nc-select full" name="type" id="type">
            <option value="" selected disabled>Select the type</option>
            <option value="{{ config('constants.company.type.LLC') }}" {{ old('type') == config('constants.company.type.LLC') ? 'selected' : '' }}>LLC</option>
            <option value="{{ config('constants.company.type.PVTLTD') }}" {{ old('type') == config('constants.company.type.PVTLTD') ? 'selected' : '' }}>PVT LTD</option>
            <option value="{{ config('constants.company.type.Coorportion') }}" {{ old('type') == config('constants.company.type.Coorportion') ? 'selected' : '' }}>Coorportion</option>
          </select>
          @error('type')
          <div class="text-red-500 text-sm mt-1">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="col-span-2 md:col-span-1">
          <label for="registration_number" class="mb-4 md:text-lg font-medium block">
            Registration number
          </label>
          <input type="text"
            class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter name" id="registration_number" name="registration_number" value="{{ old('registration_number') }}" />
          @error('registration_number')
          <div class="text-red-500 text-sm mt-1">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="col-span-2 md:col-span-1">
          <label for="website_url" class="mb-4 md:text-lg font-medium block">
            Website Url
          </label>
          <input type="text"
            class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter name" id="website_url" name="website_url" value="{{ old('website_url') }}" />
          @error('website_url')
          <div class="text-red-500 text-sm mt-1">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="col-span-2 ">
          <label for="description" class="md:text-lg font-medium block mb-4">
            Enter Description
          </label>
          <textarea
            class="w-full text-sm  bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter Description..." rows="5" id="description" name="description">{{ old('description') }}</textarea>
          @error('description')
          <div class="text-red-500 text-sm mt-1">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="col-span-2 flex gap-4 md:gap-6 mt-2">
          <button class="btn-primary" type="submit">
            Save
          </button>

        </div>
    </form>
  </div>
</div>
@endsection