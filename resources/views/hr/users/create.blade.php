@extends('layout.hr.main')

@section('content')
  <div class="main-inner">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
    <h2 class="h2">Register a new user</h2>

    </div>

    <div class="box mb-4 xxxl:mb-6">
    <div class="mb-6 pb-6 bb-dashed flex justify-between items-center">
      <h4 class="h4">Registering</h4>
    </div>
    <form method="POST" action="{{ route('hr.user.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-6 flex flex-wrap items-center gap-5 xl:gap-10">
      <!-- Fixed-size Image Preview -->
      <img id="imagePreview" src="{{ asset('assets/images/placeholder.png') }}"
        class="h-20 w-20 object-cover rounded border" alt="placeholder" />

      <div class="flex gap-4">
        <input type="file" name="path" id="photo" class="hidden" accept="image/*" />
        <label for="photo" class="btn-primary cursor-pointer">Upload Profile pic </label>
        <button type="button" class="btn-outline" onclick="resetImage()" id="resetbtn">Cancel</button>
      </div>
      </div>
      <div class="grid grid-cols-2 gap-4 xxxl:gap-6">
      <div class="col-span-2 md:col-span-1">
        <label for="company" class="mb-4 md:text-lg font-medium block">
        Select Company
        </label>
        <select name="company_id" id="company" class="nc-select full">
        <option selected disabled>Select Company</option>
        @foreach($companies as $company)
      <option value="{{ $company['id'] }}" {{ old('company_id') == $company['id'] ? 'selected' : '' }}>
        {{ $company['name'] }}
      </option>
      @endforeach
        </select>
        @error('company_id')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="first_name" class="mb-4 md:text-lg font-medium block">
        Employee First Name
        </label>
        <input type="text"
        class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter first name" id="first_name" name="first_name" value="{{ old('first_name') }}" />
        @error('first_name')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="last_name" class="mb-4 md:text-lg font-medium block">
        Employee Last Name
        </label>
        <input type="text"
        class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter last name" id="last_name" name="last_name" value="{{ old('last_name') }}" />
        @error('last_name')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="salary" class="mb-4 md:text-lg font-medium block">
        Current Salary/income per annum(optional)
        </label>
        <input type="number"
        class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter salary" id="salary" name="current_salary_per_annum"
        value="{{ old('current_salary_per_annum') }}" />
        @error('current_salary_per_annum')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="years" class="mb-4 md:text-lg font-medium block">
        Experience in Years(optional)
        </label>
        <input type="number"
        class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter years" id="years" name="experience_in_years" value="{{ old('experience_in_years') }}" />
        @error('experience_in_years')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="month" class="mb-4 md:text-lg font-medium block">
        Experience in months(optional)
        </label>
        <input type="number"
        class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter month" id="month" name="experience_in_month" value="{{ old('experience_in_month') }}" />
        @error('experience_in_month')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="age" class="mb-4 md:text-lg font-medium block">
        Age(optional)
        </label>
        <input type="number"
        class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter age" id="age" name="age" value="{{ old('age') }}" />
        @error('age')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="country" class="mb-4 md:text-lg font-medium block">
        Country
        </label>
        <select name="country_id" id="country" class="nc-select full ">
        <option selected disabled>Select Country</option>
        @foreach(config("constants.country") as $key => $name)
      <option value="{{ $name }}" {{ old('country_id') == $name ? 'selected' : '' }}>{{ $key }}</option>
      @endforeach
        </select>
        @error('country_id')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>


      <div class="col-span-2 md:col-span-1">
        <label for="email" class="mb-4 md:text-lg font-medium block">
        Email
        </label>
        <input type="text"
        class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter email" id="email" name="email" value="{{ old('email') }}" />
        @error('email')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="gender" class="md:text-lg font-medium block mb-4">
        Gender
        </label>
        <select id="gender" name="gender" class="nc-select full">
        <option selected disabled>Select Gender</option>
        @foreach(config("constants.gender") as $key => $name)
      <option value="{{ $name }}" {{ old('gender') == $name ? 'selected' : '' }}>{{ $key }}</option>

      @endforeach

        </select>
        @error('gender')
      <div class="text-red-500 text-sm mt-1">
      {{ $message }}
      </div>
      @enderror
      </div>
     

      <div class="col-span-2 md:col-span-1 ">
            <div id="passwordfield"
                class="bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-2.5 relative">
                <input type="password" class="w-11/12 text-sm bg-transparent p-0 border-none "
                    placeholder="Enter Password" id="password2" name="password" />
                <span class="absolute eye-icon ltr:right-5 rtl:left-5 top-1/2 -translate-y-1/2 cursor-pointer "
                    id="toggleBtn">
                    <i class="las la-eye" style="display: none;"></i>
                    <i class="las la-eye-slash"></i>
                </span>
                @error('password')
                    <div class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>


      <div class="col-span-2 flex gap-4 md:gap-6 mt-2">
        <button class="btn-primary" type="submit">
        Save
        </button>

      </div>
    </form>
    </div>
  </div>
  @include('common.sign-in-script');
@endsection