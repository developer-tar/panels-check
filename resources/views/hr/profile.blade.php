@extends('layout.hr.main')

@section('content')
<div class="main-inner">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
        <h2 class="h2">Profile</h2>

    </div>

    <div class="grid grid-cols-12 gap-4 xxxxxl:gap-6">
        <div class="col-span-12 lg:col-span-6">
            <div class="box xxl:p-8 xxxl:p-10">

                <p class="text-lg font-medium mb-4">Profile Photo(optional)</p>
                <div class="flex flex-wrap gap-6 xxl:gap-10 items-center bb-dashed mb-6 pb-6">
                    <img src="{{ asset('assets/images/placeholder.png') }}" width="120" height="120" class="rounded-xl"
                        alt="img" />
                    <div class="flex gap-4">
                        <label for="photo-upload" class="btn-primary">
                            Upload Photo
                        </label>
                        <input type="file" id="photo-upload" class="hidden" />
                        <button class="btn-outline">Cancel</button>
                    </div>
                </div>
                <form class="mt-6 xl:mt-8 grid grid-cols-2 gap-4 xxxxxl:gap-6">
                    <div class="col-span-2 md:col-span-1">
                        <label for="fname" class="md:text-lg font-medium block mb-4">
                            First Name
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            id="fname" placeholder="First Name" value="Darrel" />
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label for="lname" class="md:text-lg font-medium block mb-4">
                            Last Name
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            placeholder="Enter Last Name" value="Steward" id="lname" />
                    </div>
                    <div class="col-span-2">
                        <label for="user_email" class="md:text-lg font-medium block mb-4">
                            Email
                        </label>
                        <input type="email"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            placeholder="Enter Email" value="example@mail.com" id="user_email" />
                    </div>
                    <div class="col-span-2">
                        <label for="user_phone" class="md:text-lg font-medium block mb-4">
                            Phone (Optional)
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            placeholder="Enter Phone" value="91021421144" id="user_phone" />
                    </div>
                    <div class="col-span-2">
                        <label for="user_age" class="md:text-lg font-medium block mb-4">
                            Age
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            placeholder="Enter Phone" value="24" id="user_age" />
                    </div>
                    <div class="col-span-2 ">
                        <label for="years" class="mb-4 md:text-lg font-medium block">
                            Experience in Years
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
                    <div class="col-span-2 ">
                        <label for="month" class="mb-4 md:text-lg font-medium block">
                            Experience in months
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

                    <div class="col-span-2 ">
                        <label for="salary" class="mb-4 md:text-lg font-medium block">
                            Current Salary/income per annum
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
                    <div class="col-span-2">
                        <label for="phone" class="md:text-lg font-medium block mb-4">
                            Gender :
                        </label>
                        <div class="flex gap-5">
                            <label for="male" class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" id="male" name="gender" checked class="accent-secondary" />
                                Male
                            </label>
                            <label for="female" class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" id="female" name="gender" class="accent-secondary" />
                                Female
                            </label>
                            <label for="other" class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" id="other" name="gender" class="accent-secondary" />
                                Other
                            </label>
                        </div>
                    </div>
                    <div class="col-span-2">

                        <div class="flex mt-6 xxl:mt-10 gap-4">
                            <button class="btn-primary px-5">Save Changes</button>
                            <button class="btn-outline px-5">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Credit card scores -->

        </div>
        <div class="col-span-12 lg:col-span-6">
            <div class="box xxl:p-8 xxxl:p-10 mb-6">
                <h4 class="h4 bb-dashed mb-4 pb-4 md:mb-6 md:pb-6">Address</h4>
                <form class="mt-6 xl:mt-8 grid grid-cols-2 gap-4 xxxl:gap-6">
                    <div class="col-span-2 ">
                        <label for="country" class="mb-4 md:text-lg font-medium block">
                            Location
                        </label>
                        <select name="country_id" id="country" class="nc-select full ">
                            <option selected disabled>Select Location</option>
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
                        <label for="address1" class="md:text-lg font-medium block mb-4">
                            Address 1(Optional)
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            placeholder="Enter Address 1" value="Road 12, House 3, New York" id="address1" />
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label for="address2" class="md:text-lg font-medium block mb-4">
                            Address 2 (Optional)
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            placeholder="Enter Address 2" value="Road 12, House 3, Los angelos" id="address2" />
                    </div>
                    <div class="col-span-2">
                        <label for="zip" class="md:text-lg font-medium block mb-4">
                            Zip Code(Optional)
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            placeholder="Enter Zip Code" value="2250" id="zip" />
                    </div>
                    <div class="col-span-2 flex pt-4 gap-4">
                        <button class="btn-primary px-5">Save Changes</button>
                        <button class="btn-outline px-5">Cancel</button>
                    </div>
                </form>
            </div>
            <div class="box xxl:p-8 xxxl:p-10 mt-3">

                <h3 class="text-lg   h4 bb-dashed mb-4 pb-4 md:mb-6 md:pb-6">Company details </h3>

                <form class="mt-6 xl:mt-8 grid grid-cols-2 gap-4 xxxxxl:gap-6">

                    <div class="col-span-2">

                        <label for="company" class="mb-4 md:text-lg font-medium block">
                            Select Company
                        </label>
                        <select name="company_id" id="company" class="nc-select full" onchange="toggleOtherCompany()">
                            <option selected disabled>Select Company</option>
                            @foreach($companies as $company)
                            <option value="{{ $company['id'] }}" {{ old('company_id') == $company['id'] ? 'selected' : '' }}>
                                {{ $company['name'] }}
                            </option>
                            @endforeach
                            <option value="other" {{ old('company_id') == 'other' ? 'selected' : '' }}> Others</option>
                        </select>
                        @error('company_id')
                        <div class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    <div class="col-span-2" style="display: none;" id="company_name_block">
                        <label for="company_name" class="md:text-lg font-medium block mb-4">
                            Name
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            id="company_name" placeholder="First Name" value="" name='company_name' />
                        @error('company_name')
                        <div class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-span-2">
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
                    <div class="col-span-2">
                        <label for="phone" class="mb-4 md:text-lg font-medium block">
                            Phone (Optional)
                        </label>
                        <input type="text"
                            class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            placeholder="Enter phone" id="phone" name="phone" value="{{ old('phone') }}" />

                    </div>
                    <div class="col-span-2 ">
                        <label for="type" class="mb-4 md:text-lg font-medium block">
                            Type
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

                    <div class="col-span-2">
                        <label for="registration_number" class="md:text-lg font-medium block mb-4">
                            Registration number
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            placeholder="Enter registration number" id="registration_number" value="{{old('registration_number')}}" name="registration_number" />
                        @error('registration_number')
                        <div class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-span-2 ">
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
                    <div></div>
                    <div class="col-span-2">

                        <div class="flex mt-6 xxl:mt-10 gap-4">
                            <button class="btn-primary px-5">Save Changes</button>
                            <button class="btn-outline px-5">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



    </div>
</div>


<script>
    function toggleOtherCompany() {
        const select = document.getElementById('company');
        const otherField = document.getElementById('company_name_block');
        const selectedValue = select.value;

        const emailField = document.getElementById('email');
        const phoneField = document.getElementById('phone');
        const websiteUrlField = document.getElementById('website_url');
        const descriptionField = document.getElementById('description');
        const registrationField = document.getElementById('registration_number');
        const typeField = document.getElementById('type');

        if (selectedValue === 'other') {
            otherField.style.display = 'block';

            // Make fields editable
            emailField.readOnly = false;
            phoneField.readOnly = false;
            websiteUrlField.readOnly = false;
            descriptionField.readOnly = false;
            registrationField.readOnly = false;
            typeField.disabled = false;

            // Clear values
            emailField.value = '';
            phoneField.value = '';
            websiteUrlField.value = '';
            descriptionField.value = '';
            registrationField.value = '';
            typeField.value = '';
            $('#type').val('').prop('disabled', false).niceSelect('update');
        } else {
            otherField.style.display = 'none';

            fetch(`/get-company-data/${selectedValue}`)
                .then(response => {
                    if (!response.ok) throw new Error('Network response was not ok');
                    return response.json();
                })
                .then(data => {
                    // Fill fields and make them read-only / disabled
                    emailField.value = data?.email || '';
                    emailField.readOnly = true;

                    phoneField.value = data?.phone || '';
                    phoneField.readOnly = true;

                    websiteUrlField.value = data?.website_url || '';
                    websiteUrlField.readOnly = true;

                    descriptionField.value = data?.description || '';
                    descriptionField.readOnly = true;

                    registrationField.value = data?.registration_number || '';
                    registrationField.readOnly = true;
                    $('#type').val(data?.type || '').prop('disabled', true).niceSelect('update');
                })
                .catch(error => {
                    console.error('Error fetching company data:', error);
                });
        }
    }

    // Trigger on page load (useful for old input on validation fail)
    document.addEventListener("DOMContentLoaded", function() {
        // Initialize Nice Select
        $('select.nc-select').niceSelect();
        toggleOtherCompany();
        document.getElementById('company').addEventListener('change', toggleOtherCompany);
    });
</script>
@endsection