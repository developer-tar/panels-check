@extends('layout.vendor.main')

@push('page-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap/dist/css/jsvectormap.min.css" />
@endpush

@section('content')
    <div class="main-inner">
        <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
            <h2 class="h2">Claims & billing Management</h2>
        </div>

        <div class="grid grid-cols-1 gap-4 xxl:gap-6">
            <!-- Tracking Activity Logs -->
            <div class="box col-span-12 lg:col-span-6">
                <div class="flex justify-between items-center gap-4 flex-wrap bb-dashed mb-4 pb-4 lg:mb-6 lg:pb-6">
                    <h4 class="h4">List</h4>
                    <div class="flex items-center gap-4 flex-wrap grow sm:justify-end">


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
                                        User/Employee Name
                                    </div>
                                </th>
                                <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        Overall claim amount
                                    </div>
                                </th>
                                <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        Coverage Limit($)
                                    </div>
                                </th>
                                <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        Status
                                    </div>
                                </th>

                                <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        User <br>Recieved<br> Claim <br>Amount
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="even:bg-secondary/5 dark:even:bg-bg3">
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        Tammy
                                    </div>
                                </td>
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">$1,000</p>
                                    </div>

                                </td>
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">$1,00,000</p>
                                    </div>

                                </td>

                                <td class="py-2">
                                    <span
                                        class="block text-xs w-28 xxl:w-36 text-center rounded-[30px] dark:border-n500 border border-n30 py-2 bg-primary/10 dark:bg-bg3 text-primary">
                                        Submission
                                    </span>
                                </td>
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">-</p>
                                    </div>

                                </td>
                            </tr>

                            <tr class="old:bg-secondary/5 dark:even:bg-bg3">
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        Tammy
                                    </div>
                                </td>
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">$1,000</p>
                                    </div>

                                </td>
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">$1,00,000</p>
                                    </div>

                                </td>

                                <td class="py-2">
                                    <span
                                        class="block text-xs w-28 xxl:w-36 text-center rounded-[30px] dark:border-n500 border border-n30 py-2 bg-primary/10 dark:bg-bg3 text-primary">
                                        Approved
                                    </span>
                                </td>
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">$90,000</p>
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