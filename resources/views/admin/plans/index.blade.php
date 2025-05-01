@extends('layout.admin.main')

@push('page-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap/dist/css/jsvectormap.min.css" />
@endpush

@section('content')
<div class="main-inner">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
        <h2 class="h2">Plan Management</h2>
        <a href="{{route('admin.plan.create')}}" class="btn-primary inline-flex items-center">
            <i class="las la-plus-circle text-base md:text-lg"></i>
            <span class="ml-1">Add an new Benefit Plan</span>
        </a>
    </div>

    <div class="grid grid-cols-1 gap-4 xxl:gap-6">
        <!-- Plan Management -->
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
            <div class="overflow-x-auto pb-4 lg:pb-6">
                <table class="w-full whitespace-nowrap" id="payment-account">
                    <thead>
                        <tr class="bg-secondary/5 dark:bg-bg3">
                            <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                   Domain  Name
                                </div>
                            </th>
                            <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                Coverage Limit ($)
                                </div>
                            </th>
                            <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                Eligibility Rule
                                </div>
                            </th>
                            <th class="text-start !py-5 min-w-[200px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Start
                                </div>
                            </th>
                            <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    End
                                </div>
                            </th>
                            <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                   No of Employee Enrolled
                                </div>
                            </th>
                            <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Reminder<br> Status
                                </div>
                            </th>
                            
                            <th class="text-center !py-5" data-sortable="false">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even:bg-secondary/5 dark:even:bg-bg3">
                            <td class="py-2 px-6">
                                <div class="flex items-center gap-3">
                                <p class="font-medium mb-1">Healthcare</p>
                                </div>
                            </td>
                            <td class="py-2 px-6">
                                <div class="flex items-center gap-3">
                                    <p class="font-medium mb-1">1000$</p>
                                </div>

                            </td>
                            <td class="py-2">
                                <div>
                                    <p class="font-medium mb-1">The person should be...</p>

                                </div>
                            </td>
                            <td class="py-2">
                                <div>
                                    <p class="font-medium">2025-09-12</p>

                                </div>
                            </td>
                            <td class="py-2">
                                <div>
                                    <p class="font-medium">2026-09-12</p>

                                </div>
                            </td>
                            <td class="py-2">
                                <div>
                                    <p class="font-medium">100</p>

                                </div>
                            </td>
                            <td class="py-2">
                                <span
                                    class="block text-xs w-28 xxl:w-36 text-center rounded-[30px] dark:border-n500 border border-n30 py-2 bg-primary/10 dark:bg-bg3 text-primary">
                                    Active
                                </span>
                            </td>
                            <td class="py-2">
                                <div class="flex justify-center">
                                    <div class="relative">
                                        <i class="las la-ellipsis-v horiz-option-btn cursor-pointer popover-button"></i>
                                        <ul class="horiz-option popover-content">
                                            <li>
                                                <a href="{{route('admin.plan.edit', 12)}}" class="single-option">
                                                    Edit
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/delete-url" class="single-option">
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </td>
                        </tr>

                        <tr class="old:bg-secondary/5 dark:even:bg-bg3">
                            <td class="py-2 px-6">
                                <div class="flex items-center gap-3">
                                <p class="font-medium mb-1">Retirement</p>
                                </div>
                            </td>
                            <td class="py-2 px-6">
                                <div class="flex items-center gap-3">
                                    <p class="font-medium mb-1">1000$</p>
                                </div>

                            </td>
                            <td class="py-2">
                                <div>
                                    <p class="font-medium mb-1">The person should be...</p>

                                </div>
                            </td>
                            <td class="py-2">
                                <div>
                                    <p class="font-medium">2025-09-12</p>

                                </div>
                            </td>
                            <td class="py-2">
                                <div>
                                    <p class="font-medium">2026-09-12</p>

                                </div>
                            </td>
                            <td class="py-2">
                                <div>
                                    <p class="font-medium">10</p>

                                </div>
                            </td>

                            <td class="py-2">
                                <span
                                    class="block text-xs w-28 xxl:w-36 text-center rounded-[30px] dark:border-n500 border border-n30 py-2 bg-primary/10 dark:bg-bg3 text-primary">
                                    Active
                                </span>
                            </td>
                            <td class="py-2">
                                <div class="flex justify-center">
                                    <div class="relative">
                                        <i class="las la-ellipsis-v horiz-option-btn cursor-pointer popover-button"></i>
                                        <ul class="horiz-option popover-content">
                                            <li>
                                                <a href="{{route('admin.plan.edit', 12)}}" class="single-option">
                                                    Edit
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/delete-url" class="single-option">
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex col-span-12 gap-4 sm:justify-between justify-center items-center flex-wrap">
                <p>
                    Showing 1 to 2 of 2 entries
                </p>

                <ul class="flex gap-2 md:gap-3 flex-wrap md:font-semibold items-center">
                    <li>
                        <button
                            class="hover:bg-primary text-primary rtl:rotate-180 hover:text-n0 border md:w-10 duration-300 md:h-10 w-8 h-8 flex items-center rounded-full justify-center border-primary">
                            <i class="las la-angle-left text-lg"></i>
                        </button>
                    </li>
                    <li>
                        <button
                            class="hover:bg-primary text-n0 bg-primary hover:text-n0 border md:w-10 duration-300 md:h-10 w-8 h-8 flex items-center rounded-full justify-center border-primary">
                            1
                        </button>
                    </li>
                    <li>
                        <button
                            class="hover:bg-primary text-primary hover:text-n0 border md:w-10 duration-300 md:h-10 w-8 h-8 flex items-center rounded-full justify-center border-primary">
                            2
                        </button>
                    </li>
                    <li>
                        <button
                            class="hover:bg-primary text-primary hover:text-n0 border md:w-10 duration-300 md:h-10 w-8 h-8 flex items-center rounded-full justify-center border-primary">
                            3
                        </button>
                    </li>
                    <li>
                        <button
                            class="hover:bg-primary text-primary hover:text-n0 rtl:rotate-180 border md:w-10 duration-300 md:h-10 w-8 h-8 flex items-center rounded-full justify-center border-primary">
                            <i class="las la-angle-right text-lg"></i>
                        </button>
                    </li>
                </ul>
            </div>
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
                            <div class="relative bg-secondary/5 py-3 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl">
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