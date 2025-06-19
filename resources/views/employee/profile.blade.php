@extends('layout.employee.main')

@section('content')
    <div class="main-inner">
        <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
            <h2 class="h2">Profile</h2>
        </div>

        <div class="grid grid-cols-12 gap-4 xxxxxl:gap-6">
            <div class="col-span-12 lg:col-span-6">

                <form class="box xxl:p-8 xxxl:p-10" method="post" action="{{route('personal.profile')}}"
                    enctype="multipart/form-data">
                    @csrf
                    <p class="text-lg font-medium mb-4">Profile Photo(optional)</p>
                    <div class="flex flex-wrap gap-6 xxl:gap-10 items-center bb-dashed mb-6 pb-6 gap-check">
                        <!-- Fixed-size Image Preview -->


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

                        <input type='hidden' value="{{config('constants.roles_inverse.employee')}}" name="role" />
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
                </form>
                <!-- Credit card scores -->
                <div class="box xxl:p-8 xxxl:p-10 mt-3">
                <h4 class="h4 bb-dashed mb-4 pb-4 md:mb-6 md:pb-6">Identity Verification</h4>
              <form class="mt-6 xl:mt-8 grid grid-cols-2 gap-4 xxxl:gap-6" method="post" action="{{ route('employee.user.identity.verify') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="col-span-2">
                            <label for="identity_type" class="md:text-lg font-medium block mb-4">Document Type</label>
                            <select id="identity_type" name="identity_type" class="nc-select full" onchange="handleDocTypeChange()">
                                <option selected disabled>Select Document Type</option>
                                <option value="aadhaar" {{ old('identity_type') == 'aadhaar' ? 'selected' : '' }}>Aadhaar Card</option>
                                <option value="pan" {{ old('identity_type') == 'pan' ? 'selected' : '' }}>PAN Card</option>
                                <option value="passport" {{ old('identity_type') == 'passport' ? 'selected' : '' }}>Passport</option>
                                <option value="license" {{ old('identity_type') == 'license' ? 'selected' : '' }}>Driving License</option>
                            </select>
                            @error('identity_type')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label id="identity_number_label" class="md:text-lg font-medium block mb-4">Document Number</label>
                            <input type="text" class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3" placeholder="Enter Document Number" id="identity_number" name="identity_number" value="{{ old('identity_number') }}" />
                            @error('identity_number')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="identity_file" class="md:text-lg font-medium block mb-4">Upload Document</label>
                            <div class="flex gap-4">
                                <input type="file" name="identity_file" id="identity_file" class="hidden" accept=".pdf,.jpg,.jpeg,.png,.docx,.txt" />
                                <label for="identity_file" class="btn-primary cursor-pointer">Choose File</label>
                                <div id="filePreview" class="text-sm text-gray-600 mt-2">No file selected</div>
                            </div>
                            @error('identity_file')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="identity_note" class="md:text-lg font-medium block mb-4">Notes (Optional)</label>
                            <textarea class="w-full text-sm bg-primary/5 border border-n30 rounded-3xl px-3 md:px-6 py-2 md:py-3" placeholder="Enter any notes..." rows="3" id="identity_note" name="identity_note">{{ old('identity_note') }}</textarea>
                        </div>

                        <div class="col-span-2 flex pt-4 gap-4">
                            <button type="submit" class="btn-primary px-5">Save Changes</button>
                        </div>
                    </form>
            </div>
            </div>
            <div class="col-span-12 lg:col-span-6">

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
                            <input type='hidden' value="{{config('constants.roles_inverse.employee')}}" name="role" />
                            @if($companies->isNotempty())   
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
                                @else 
                                <input type="hidden" value="1" name="notAnyCompanyYet"/>
                                @endif
                               
                                @php
                                $displayStyle = ($companies->isEmpty() || old('company_id') == 'other') ? 'block' : 'none';
                            @endphp
                                <input type="hidden" value="{{ config('constants.company.type.LLC') }}" name="type"/>
                                
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


                <div class="box xxl:p-8 xxxl:p-10 mt-3">
                <h4 class="h4 bb-dashed mb-4 pb-4 md:mb-6 md:pb-6">Credit Score Calculator</h4>
                <form class="mt-6 xl:mt-8 grid grid-cols-2 gap-4 xxxl:gap-6" method="post" action="{{ route('employee.user.credit.score') }}">
                    @csrf
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
                    <h4 class="h4 bb-dashed mb-4 pb-4 md:mb-6 md:pb-6">Loan Exposure (EAD-risk)</h4>
                    <div class="col-span-2 ">
                        <label for="personalLoan" class="md:text-lg font-medium block mb-4">
                            Personal Loan:
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            placeholder="Enter personal loan" id="personalLoan"  value="{{ old('personal_loan', $user?->personal_loan) }}" name="personal_loan" />
                            @error('personal_loan')
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="col-span-2 ">
                        <label for="autoLoan" class="md:text-lg font-medium block mb-4">
                            Auto Loan:
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            placeholder="Enter auto loan" id="autoLoan" value="{{ old('auto_loan', $user?->auto_loan) }}" name="auto_loan" />
                            @error('auto_loan')
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="col-span-2 ">
                        <label for="creditCard" class="md:text-lg font-medium block mb-4">
                            Credit Card:
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            placeholder="Enter credit card" id="creditCard" value="{{ old('credit_card', $user?->credit_card) }}" name="credit_card" />
                            @error('credit_card')
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="col-span-2 ">
                        <label for="overdraft" class="md:text-lg font-medium block mb-4">
                            Overdraft:
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            placeholder="Enter overdraft" id="overdraft"  value="{{ old('overdraft', $user?->overdraft) }}" name="overdraft" />
                            @error('overdraft')
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="col-span-2 ">
                        <label for="educationLoan" class="md:text-lg font-medium block mb-4">
                            Educational Loan:
                        </label>
                        <input type="text"
                            class="w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                            placeholder="Enter educational loan" id="educationLoan"  value="{{ old('educational_loan', $user?->educational_loan) }}" name="educational_loan" />
                            @error('educational_loan')
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>

                    <div class="col-span-2 flex pt-4 gap-4">
                        <button type="submit" class="btn-primary px-5" >Save Changes</button>
                        <button class="btn-outline px-5">Cancel</button>
                    </div>
                    <h3>Results</h3>
                    <br>
                    <p><strong>Total Exposure (EAD):</strong> <span id="totalEAD">{{ $user?->total_ead ?? 'N/A' }}</span></p>
                    <p><strong>DBR (EAD / Salary):</strong> <span id="dbr">{{ $user?->dbr_calculation ?? 'N/A' }}</span></p>
                    <p><strong>Credit Limit:</strong> <span id="creditLimit">{{ $user?->credit_limit ?? 'N/A' }}</span></p>
                    <p><strong>Available Limit:</strong> <span id="availableLimit">{{ $user?->avaiable_limit ?? 'N/A' }}</span></p>
                </form>
            </div>
            </div>

            
        
            
        </div>
    </div>


@endsection
@push('script')

@push('script')
<script>
    function handleDocTypeChange() {
        const docType = document.getElementById('identity_type').value;
        const label = document.getElementById('identity_number_label');
        const input = document.getElementById('identity_number');

        switch (docType) {
            case 'aadhaar':
                label.textContent = 'Aadhaar Number';
                input.placeholder = 'Enter Aadhaar Number (XXXX-XXXX-XXXX)';
                input.pattern = '\\d{4}-\\d{4}-\\d{4}';
                break;
            case 'pan':
                label.textContent = 'PAN Number';
                input.placeholder = 'Enter PAN Number (ABCDE1234F)';
                input.pattern = '[A-Z]{5}[0-9]{4}[A-Z]{1}';
                break;
            case 'passport':
                label.textContent = 'Passport Number';
                input.placeholder = 'Enter Passport Number';
                input.pattern = '.{5,20}';
                break;
            case 'license':
                label.textContent = 'Driving License Number';
                input.placeholder = 'Enter License Number';
                input.pattern = '.{5,20}';
                break;
            default:
                label.textContent = 'Document Number';
                input.placeholder = 'Enter Document Number';
                input.pattern = '.{3,20}';
        }
    }

    document.getElementById("identity_file").addEventListener("change", function () {
        const fileName = this.files[0]?.name;
        document.getElementById("filePreview").innerText = fileName ? `Selected: ${fileName}` : "No file selected";
    });

    document.addEventListener("DOMContentLoaded", () => {
        if (document.getElementById('identity_type').value) {
            handleDocTypeChange();
        }

        document.getElementById('identity_type').addEventListener('change', handleDocTypeChange);

        // Validation on submit
        const form = document.getElementById('identityForm');
        form.addEventListener('submit', function (e) {
            let isValid = true;

            // Clear previous errors
            document.querySelectorAll('.text-red-500').forEach(el => el.remove());

            // Document Type
            const docType = document.getElementById('identity_type');
            if (!docType.value) {
                showError(docType, 'Please select document type');
                isValid = false;
            }

            // Document Number
            const docNumber = document.getElementById('identity_number');
            if (!docNumber.value) {
                showError(docNumber, 'Please enter document number');
                isValid = false;
            } else if (!docNumber.checkValidity()) {
                showError(docNumber, 'Invalid document number format');
                isValid = false;
            }

            // File
            const fileInput = document.getElementById('identity_file');
            if (!fileInput.value) {
                showError(fileInput, 'Please upload a document file');
                isValid = false;
            }

            if (!isValid) e.preventDefault();
        });

        function showError(element, message) {
            const div = document.createElement('div');
            div.className = 'text-red-500 text-sm mt-1';
            div.textContent = message;
            element.parentNode.appendChild(div);
        }
    });
</script>
@endpush
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
        document.addEventListener("DOMContentLoaded", function () {
            // Initialize Nice Select
            $('select.nc-select').niceSelect();

            let companyDiv = document.getElementById('company');
            if (companyDiv?.length()) {
                toggleOtherCompany();
                companyDiv.addEventListener('change', toggleOtherCompany);
            }

        });

   </script>
@endpush