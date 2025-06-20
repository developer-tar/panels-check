@extends('layout.vendor.main')

@section('content')
<style>
    .hide-important {
        display: none !important;
    }
</style>
<div class="main-inner">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
        <h2 class="h2">Profile</h2>
    </div>

    <div class="grid grid-cols-12 gap-4 xxxxxl:gap-6">
        <!-- <div class="col-span-12 lg:col-span-6"> -->

        <!-- <form class="box xxl:p-8 xxxl:p-10" method="post" action="{{route('personal.profile')}}"
                    enctype="multipart/form-data">
                    @csrf
                    <p class="text-lg font-medium mb-4">Profile Photo(optional)</p>
                    <div class="flex flex-wrap gap-6 xxl:gap-10 items-center bb-dashed mb-6 pb-6 gap-check">
                         Fixed-size Image Preview 


                        <img id="imagePreview"
                            src="  @if($media) {{ asset($media) }}  @else {{ asset('assets/images/placeholder.png') }} @endif"
                            class="h-20 w-20 object-cover rounded border" alt="placeholder" />

                        <div class="flex gap-4">
                            <input type="file" name="path" id="photo" class="hidden" accept="image/*" />
                            <label for="photo" class="btn-primary cursor-pointer">Upload Profile pic </label>
                            <button type="button" class="btn-outline" id="resetbtn">Cancel</button>
                        </div>
                        <div class="flex">

                            @error('path')
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>
                    <div class="mt-6 xl:mt-8 grid grid-cols-2 gap-4 xxxxxl:gap-6">

                        <input type='hidden' value="{{config('constants.roles_inverse.vendor')}}" name="role" />
                        @if($user && $media)
                            <input type='hidden' value="" name="removeImage" id="removeImage" />
                        @endif

                        <div class="col-span-2 md:col-span-1">
                            <label for="fname" class="md:text-lg font-medium block mb-4">
                                First Name
                            </label>
                            <input type="text"
                                class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                                id="fname" placeholder="First Name" value="{{ old('user_name', $user?->first_name) }}"
                                name="first_name" />
                            @error('first_name')
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <label for="lname" class="md:text-lg font-medium block mb-4">
                                Last Name
                            </label>
                            <input type="text"
                                class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                                placeholder="Enter Last Name" id="lname" value="{{ old('last_name', $user?->last_name) }}"
                                name="last_name" />
                            @error('last_name')
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="user_email" class="md:text-lg font-medium block mb-4">
                                Email
                            </label>
                            <input type="email"
                                class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                                placeholder="Enter Email" id="user_email" value="{{ old('user_email', $user?->email) }}"
                                name="user_email" readonly />
                            @error('user_email')
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="col-span-2">
                            <label for="user_phone" class="md:text-lg font-medium block mb-4">
                                Phone (Optional)
                            </label>
                            <input type="text"
                                class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                                placeholder="Enter Phone" id="user_phone" value="{{ old('user_phone', $user?->phone)}}"
                                name='user_phone' />
                                @error('user_phone')
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="col-span-2">
                            <label for="user_age" class="md:text-lg font-medium block mb-4">
                                Age
                            </label>
                            <input type="text"
                                class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                                placeholder="Enter Phone" id="user_age" value="{{ old('user_age', $user?->age)}}"
                                name="user_age" />
                            @error('user_age')
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="col-span-2">
                            <label for="years" class="mb-4 md:text-lg font-medium block">
                                Experience in Years
                            </label>
                            <input type="number"
                                class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                                placeholder="Enter years" id="years" name="experience_in_years"
                                value="{{ old('experience_in_years', $user?->experience_in_years) }}"
                                name="experience_in_years" />
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
                                placeholder="Enter month" id="month"
                                value="{{ old('experience_in_month', $user?->experience_in_month) }}"
                                name="experience_in_month" />
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
                                value="{{ old('current_salary_per_annum', $user?->current_salary_per_annum) }}" />
                            @error('current_salary_per_annum')
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-span-2 ">
                            <label for="gender" class="md:text-lg font-medium block mb-4">
                                Gender
                            </label>
                            <select id="gender" name="gender" class="nc-select full">
                                <option selected disabled>Select Gender</option>
                                @foreach(config("constants.gender") as $key => $name)
                                    <option value="{{ $name }}" {{ old('gender', $user?->gender) == $name ? 'selected' : '' }}>
                                        {{ $key }}</option>

                                @endforeach

                            </select>
                            @error('gender')
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-span-2">

                            <div class="flex mt-6 xxl:mt-10 gap-4">
                                <button type="submit" class="btn-primary px-5">Save Changes</button>

                            </div>
                        </div>
                    </div>
                <!-- </form> -->
        <!-- Credit card scores  -->

        <!-- </div> -->
        <div class="col-span-12 lg:col-span-12">

            <div class="box xxl:p-8 xxxl:p-10">

                <h3 class="text-lg h4 bb-dashed mb-4 pb-4 md:mb-6 md:pb-6">Company details </h3>

                @if($companyDetails)

                <div class="mt-6 xl:mt-8 grid grid-cols-2 gap-4 xxxxxl:gap-6">
                    <div class="col-span-2">
                        <label for="company_name_readonly" class="md:text-lg font-medium block mb-4">
                            Name
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            id="company_name_readonly" placeholder="First Name"
                            value="{{$companyDetails?->company_name}}" readonly />
                    </div>

                    <div class="col-span-2">
                        <label for="company_website_url_readonly" class="md:text-lg font-medium block mb-4">
                            Website Url
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            id="company_website_url_readonly" placeholder="First Name"
                            value="{{$companyDetails?->website_url}}" readonly />
                    </div>
                    <div class="col-span-2">
                        <label for="company_rg_number_readonly" class="md:text-lg font-medium block mb-4">
                            Registration number
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            id="company_rg_number_readonly" placeholder="First Name"
                            value="{{$companyDetails?->registration_number}}" readonly />
                    </div>
                    <div class="col-span-2 ">
                        <label for="description" class="md:text-lg font-medium block mb-4">
                            Enter Description
                        </label>
                        <textarea
                            class="w-full text-sm  bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            placeholder="Enter Description..." rows="5" id="description" name="description"
                            readonly>{{ $companyDetails?->description }}</textarea>

                    </div>
                </div>
                @else

                <form class="mt-6 xl:mt-8 grid grid-cols-2 gap-4 xxxxxl:gap-6" method="post"
                    action="{{route('company.profile')}}">
                    @csrf
                    <input type='hidden' value="{{config('constants.roles_inverse.vendor')}}" name="role" />
                    @if($companies->isNotempty())
                    <div class="col-span-2" id="company_list">

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
                    @else
                    <input type="hidden" value="1" name="notAnyCompanyYet" />
                    @endif
                    <input type="hidden" value="{{ config('constants.company.type.LLC') }}" name="type" />
                    @php
                    $displayStyle = ($companies->isEmpty() || old('company_id') == 'other') ? 'block' : 'none';
                    @endphp
                    <div class="col-span-2" style="display: {{ $displayStyle }};" id="company_name_block">
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


                    <div class="col-span-2">
                        <label for="registration_number" class="md:text-lg font-medium block mb-4">
                            Registration number
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            placeholder="Enter registration number" id="registration_number"
                            value="{{old('registration_number')}}" name="registration_number" />
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
                            placeholder="Enter name" id="website_url" name="website_url"
                            value="{{ old('website_url') }}" />
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
                            placeholder="Enter Description..." rows="5" id="description"
                            name="description">{{ old('description') }}</textarea>
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

                        </div>
                    </div>

                </form>
                @endif
            </div>
        </div>
    </div>
</div>


@endsection
@push('script')
@include('common.sign-in-script')
<script>
    function toggleOtherCompany() {
        const select = document.getElementById('company');
        const otherField = document.getElementById('company_name_block');
        const selectedValue = select?.value;

        const emailField = document.getElementById('email');
        const phoneField = document.getElementById('phone');
        const websiteUrlField = document.getElementById('website_url');
        const descriptionField = document.getElementById('description');
        const registrationField = document.getElementById('registration_number');
        const typeField = document.getElementById('type');

        if (selectedValue === 'other') {
            if (otherField?.style.display) {
                otherField.style.display = 'block';
            }

            // Make fields editable
            emailField.readOnly = false;
            phoneField.readOnly = false;
            websiteUrlField.readOnly = false;
            descriptionField.readOnly = false;
            registrationField.readOnly = false;


            // Clear values
            emailField.value = '';
            phoneField.value = '';
            websiteUrlField.value = '';
            descriptionField.value = '';
            registrationField.value = '';


        } else {
            if (otherField?.style.display) {
                otherField.style.display = 'none';
            }

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
                    typeField.value = data?.type || '';

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

        const companySelect = document.getElementById('company');

        if (companySelect) {
            // Set default selected option to "other"
            companySelect.value = 'other';

            const companyList = document.getElementById('company_list');
            if (companyList) {
                console.log(companyList);
                companyList.style.display = 'none';
            }
            // Manually update the Nice Select UI
            $('select.nc-select').niceSelect('update');
            companySelect.classList.add('hide-important')
            // Call toggle function after setting value
            toggleOtherCompany();

            // Add change listener
            companySelect.addEventListener('change', toggleOtherCompany);
        }
    });
</script>
@endpush