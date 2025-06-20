@extends('layout.employee.main')

@push('page-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap/dist/css/jsvectormap.min.css" />
@endpush

@section('content')
<div class="main-inner">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
        <h2 class="h2">Benefit Management</h2>
        <a href="{{route('employee.benefit.create')}}" class="btn-primary inline-flex items-center">
            <i class="las la-plus-circle text-base md:text-lg"></i>
            <span class="ml-1">Assign a benefit</span>
        </a>
    </div>

    <div class="grid grid-cols-1 gap-4 xxl:gap-6">
        <!-- Benefit Management -->
        <div class="box col-span-12 lg:col-span-6">
            <div class="flex justify-between items-center gap-4 flex-wrap bb-dashed mb-4 pb-4 lg:mb-6 lg:pb-6">
                <h4 class="h4">Plans</h4>
                <div class="flex items-center gap-4 flex-wrap grow sm:justify-end">

                    <form
                        class="bg-primary/5 datatable-search dark:bg-bg3 border border-n30 dark:border-n500 flex gap-3 rounded-[30px] focus-within:border-primary p-1 items-center justify-between min-w-[200px] xxl:max-w-[319px]">
                        <input type="text" placeholder="Search"
                            class="bg-transparent text-sm ltr:pl-4 rtl:pr-4 py-1 w-full border-none"
                            id="payment-account-search" />
                        <button
                            class="bg-primary shrink-0 rounded-full w-7 h-7 lg:w-8 lg:h-8 flex justify-center items-center text-n0">
                            <i class="las la-search text-lg"></i>
                        </button>
                    </form>
                    <div class="flex items-center gap-3 whitespace-nowrap">
                        <span>Sort By : </span>
                        <select name="sort" class="nc-select green">
                            <option value="day">Last 15 Days</option>
                            <option value="week">Last 1 Month</option>
                            <option value="year">Last 6 Month</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Two Cards Side by Side -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <!-- Card 1 -->
                <div class="box p-6 rounded-2xl shadow-sm border border-n30 dark:border-n500 bg-white dark:bg-bg3">
                    <h3 class="text-lg font-semibold text-n900 dark:text-white mb-4">Benefit</h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-gray-700 dark:text-gray-200">
                        <div>
                            <p class="text-gray-500 dark:text-gray-400">Domain</p>
                            <p class="text-base font-semibold">{{ $claims->count() }}</p>
                        </div>

                        <div>
                            <p class="text-gray-500 dark:text-gray-400">Documents Uploaded</p>
                            <p class="text-base font-semibold text-blue-600">{{ $claims->filter(fn($c) => $c['path'])->count() }}</p>
                        </div>

                        <div>
                            <p class="text-gray-500 dark:text-gray-400">Total Claim Amount</p>
                            <p class="text-base font-semibold text-green-600">
                                ₹{{ number_format($claims->sum('claim_amount'), 2) }}
                            </p>
                        </div>

                        <div>
                            <p class="text-gray-500 dark:text-gray-400">Company Claim Total</p>
                            <p class="text-base font-semibold text-orange-500">
                                ₹{{ number_format($claims->sum('company_claim_amount'), 2) }}
                            </p>
                        </div>

                        <div class="sm:col-span-2 pt-2 border-t border-gray-200 dark:border-n600 mt-2">
                            <div class="flex flex-wrap gap-4 text-sm mt-2">
                                <span class="text-green-600 font-medium">Active: {{ $claims->where('status', 'active')->count() }}</span>
                                <span class="text-red-500 font-medium">Inactive: {{ $claims->where('status', 'inactive')->count() }}</span>
                                <span class="text-gray-500 font-medium">Others: {{ $claims->reject(fn($c) => in_array($c['status'], ['active', 'inactive']))->count() }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Optional Summary or Duplicate -->
                <div class="box p-6 rounded-2xl shadow-sm border border-n30 dark:border-n500 bg-white dark:bg-bg3">
                    <h3 class="text-lg font-semibold text-n900 dark:text-white mb-4">Benefit Totals Summary</h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-gray-700 dark:text-gray-200">
                        <div>
                            <p class="text-gray-500 dark:text-gray-400">Total Enrollments</p>
                            <p class="text-base font-semibold">{{ $claims->count() }}</p>
                        </div>

                        <div>
                            <p class="text-gray-500 dark:text-gray-400">Documents Uploaded</p>
                            <p class="text-base font-semibold text-blue-600">{{ $claims->filter(fn($c) => $c['path'])->count() }}</p>
                        </div>

                        <div>
                            <p class="text-gray-500 dark:text-gray-400">Total Claim Amount</p>
                            <p class="text-base font-semibold text-green-600">
                                ₹{{ number_format($claims->sum('claim_amount'), 2) }}
                            </p>
                        </div>

                        <div>
                            <p class="text-gray-500 dark:text-gray-400">Company Claim Total</p>
                            <p class="text-base font-semibold text-orange-500">
                                ₹{{ number_format($claims->sum('company_claim_amount'), 2) }}
                            </p>
                        </div>

                        <div class="sm:col-span-2 pt-2 border-t border-gray-200 dark:border-n600 mt-2">
                            <div class="flex flex-wrap gap-4 text-sm mt-2">
                                <span class="text-green-600 font-medium">Active: {{ $claims->where('status', 'active')->count() }}</span>
                                <span class="text-red-500 font-medium">Inactive: {{ $claims->where('status', 'inactive')->count() }}</span>
                                <span class="text-gray-500 font-medium">Others: {{ $claims->reject(fn($c) => in_array($c['status'], ['active', 'inactive']))->count() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto pb-4 lg:pb-6">
                <table class="w-full whitespace-nowrap" id="payment-account">
                    <thead>
                        <tr class="bg-secondary/5 dark:bg-bg3">
                            <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Docx
                                </div>
                            </th>
                            <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Company Name
                                </div>
                            </th>
                            <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Domain Name
                                </div>
                            </th>

                            <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Claim Amount
                                </div>
                            </th>
                            <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Company <br>Claim<br> Amount
                                </div>
                            </th>
                            <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Start Period
                                </div>
                            </th>
                            <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    End Period
                                </div>
                            </th>
                            <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Enrolled<br> At
                                </div>
                            </th>
                            <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Status
                                </div>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @if($claims->isNotEmpty())
                        @foreach($claims as $claim)
                        <tr class="even:bg-secondary/5 dark:even:bg-bg3">
                            <td class="py-2 px-6">
                                <div class="flex items-center gap-3">
                                    @if($claim['path'])
                                    <a href="{{ asset($claim['path']) }}" download class="text-blue-500 underline">
                                        Download
                                    </a>
                                    @else
                                    <span class="text-gray-500">No document</span>
                                    @endif
                                </div>
                            </td>
                            <td class="py-2 px-6">
                                <div class="flex items-center gap-3">
                                    <p class="font-medium mb-1">{{ $claim['company_name'] ?? "N/A" }}</p>
                                </div>

                            </td>

                            <td class="py-2">
                                <div>
                                    <p class="font-medium">{{ $claim['domain_name'] ?? "N/A" }}</p>

                                </div>
                            </td>
                            <td class="py-2">
                                <div>
                                    <p class="font-medium">{{ $claim['claim_amount'] ?? "N/A" }}</p>

                                </div>
                            </td>
                            <td class="py-2">
                                <div>
                                    <p class="font-medium">{{ $claim['company_claim_amount'] ?? "N/A" }}</p>

                                </div>
                            </td>
                            <td class="py-2">
                                <div>
                                    <p class="font-medium">{{ $claim['start_period'] ?? "N/A" }}</p>

                                </div>
                            </td>
                            <td class="py-2">
                                <div>
                                    <p class="font-medium">{{ $claim['end_period'] ?? "N/A" }}</p>

                                </div>
                            </td>

                            <td class="py-2">
                                <div>
                                    <p class="font-medium">{{ $claim['enrolled_at'] ?? "N/A" }}</p>

                                </div>
                            </td>

                            <td class="py-2">
                                <div>
                                    <p class="font-medium">{{ $claim['status'] ?? "N/A" }}</p>

                                </div>
                            </td>


                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            @if($claims->isNotEmpty())
            <div class="flex col-span-12 gap-4 sm:justify-between justify-center items-center flex-wrap">
                <p>
                    Showing {{ $claims->firstItem() }} to {{ $claims->lastItem() }} of {{ $claims->total() }}
                    entries
                </p>

                {{ $claims->onEachSide(1)->links('common.pagination') }}
            </div>
            @endif
        </div>

    </div>
</div>
@endsection

@section('page-modal')
<div class="modal-two-overlay fixed inset-0 z-[99] modalhide overflow-y-auto bg-n900/80 duration-500">
    <div class="overflow-y-auto">
        <div
            class="modal box modal-inner absolute left-1/2 my-10 max-h-[90vh] w-[95%] max-w-[710px] -translate-x-1/2 overflow-y-auto duration-300 xl:p-8">
            <!-- { "translate-y-0 scale-100 opacity-100 my-10": open } -->
            <div class="relative">
                <button class="modal-two-close-btn absolute top-0 ltr:right-0 rtl:left-0">
                    <i class="las la-times"></i>
                </button>

                <form>
                    <div class="mt-6 grid grid-cols-2 gap-4 xl:mt-8 xxxl:gap-6">
                        <div class="col-span-2">
                            <label for="name" class="mb-4 block font-medium md:text-lg">
                                Account Holder Name
                            </label>
                            <input type="text"
                                class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3"
                                placeholder="Enter Name" id="name" required />
                        </div>
                        <div class="col-span-2">
                            <label for="number" class="mb-4 block font-medium md:text-lg">
                                Phone Number
                            </label>
                            <input type="number"
                                class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3"
                                placeholder="Enter Number" id="number" required />
                        </div>
                        <div class="col-span-2">
                            <label for="currency" class="mb-4 block font-medium md:text-lg">
                                Select Currency
                            </label>
                            <select name="currency" class="nc-select full dark:!border-n500">
                                <option value="usd">USD</option>
                                <option value="gbp">GBP</option>
                                <option value="yen">YEN</option>
                                <option value="jpn">JPN</option>
                            </select>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <label for="rate" class="mb-4 block font-medium md:text-lg">
                                Interest Rate
                            </label>
                            <input type="number"
                                class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3"
                                placeholder="Interest Rate %" id="rate" required />
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <label for="expire" class="mb-4 block font-medium md:text-lg">
                                Expiry Date
                            </label>
                            <div
                                class="relative bg-secondary/5 py-3 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl">
                                <input id="date2" class="border-none" placeholder="Select Date" autocomplete="off" />
                                <i
                                    class="las la-calendar absolute ltr:right-4 rtl:left-4 top-1/2 -translate-y-1/2 cursor-pointer"></i>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label for="amount" class="mb-4 block font-medium md:text-lg">
                                Amount
                            </label>
                            <input type="number"
                                class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3"
                                placeholder="Enter Amount" id="amount" required />
                        </div>
                        <div class="col-span-2">
                            <label for="status" class="mb-4 block font-medium md:text-lg">
                                Select Status
                            </label>
                            <select name="currency" class="nc-select full dark:!border-n500">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="col-span-2 mt-4">
                            <button class="btn-primary flex w-full justify-center" type="submit">
                                Create Account
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection