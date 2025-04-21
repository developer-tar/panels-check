@extends('layout.employee.main')

@section('content')
    <div class="main-inner">
        <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
            <h2 class="h2">Analytics</h2>

        </div>

        <div class="box xl:p-8">
            <div class="flex justify-between items-center flex-wrap gap-4 mb-4 pb-4 xl:pb-6 xl:mb-6 bb-dashed font-medium">
                <h4 class="h4">Overview</h4>
                <div class="flex items-center gap-2">
                    <p class="text-xs sm:text-sm md:text-base">Sort By : </p>
                    <select name="sort" class="nc-select green">
                        <option value="day">Last 15 Days</option>
                        <option value="week">Last 1 Month</option>
                        <option value="year">Last 6 Month</option>
                    </select>
                </div>
            </div>
            <!-- Statistics -->
            <div
                class="box xxxl:p-8 grid grid-cols-12 xxl:divide-x-2 xxl:rtl:divide-x-reverse bg-primary/5 dark:bg-bg3 rounded-xl border border-n30 dark:border-n500 divide-n30 dark:divide-n500 divide-dashed max-xxl:gap-5 mb-4 xxxl:mb-6">
                <div
                    class="col-span-12 sm:col-span-6 xxl:col-span-3 flex items-center justify-between overflow-x-hidden xxl:px-6 first:ltr:pl-0 first:rtl:pr-0 last:ltr:pr-0 last:rtl:pl-0 gap-3">
                    <div>
                        <p class="font-medium mb-4">Total Balance</p>
                        <div class="flex gap-2 items-center">
                            <h4 class="h4">$8500</h4>
                            <span class="text-primary text-sm flex items-center gap-1">
                                <i class="las la-arrow-up text-base"></i> 50.8%
                            </span>
                        </div>
                    </div>
                    <div class="reports-stat-chart"></div>
                </div>
                <div
                    class="col-span-12 sm:col-span-6 xxl:col-span-3 flex items-center justify-between overflow-x-hidden xxl:px-6 first:ltr:pl-0 first:rtl:pr-0 last:ltr:pr-0 last:rtl:pl-0 gap-3">
                    <div>
                        <p class="font-medium mb-4">Total Deposits</p>
                        <div class="flex gap-2 items-center">
                            <h4 class="h4">$5500</h4>
                            <span class="text-primary text-sm flex items-center gap-1">
                                <i class="las la-arrow-up text-base"></i> 50.8%
                            </span>
                        </div>
                    </div>
                    <div class="reports-stat-chart"></div>
                </div>
                <div
                    class="col-span-12 sm:col-span-6 xxl:col-span-3 flex items-center justify-between overflow-x-hidden xxl:px-6 first:ltr:pl-0 first:rtl:pr-0 last:ltr:pr-0 last:rtl:pl-0 gap-3">
                    <div>
                        <p class="font-medium mb-4">Yearly In</p>
                        <div class="flex gap-2 items-center">
                            <h4 class="h4">$2500</h4>
                            <span class="text-primary text-sm flex items-center gap-1">
                                <i class="las la-arrow-up text-base"></i> 50.8%
                            </span>
                        </div>
                    </div>
                    <div class="reports-stat-chart"></div>
                </div>
                <div
                    class="col-span-12 sm:col-span-6 xxl:col-span-3 flex items-center justify-between overflow-x-hidden xxl:px-6 first:ltr:pl-0 first:rtl:pr-0 last:ltr:pr-0 last:rtl:pl-0 gap-3">
                    <div>
                        <p class="font-medium mb-4">Yearly Out</p>
                        <div class="flex gap-2 items-center">
                            <h4 class="h4">$3500</h4>
                            <span class="text-primary text-sm flex items-center gap-1">
                                <i class="las la-arrow-up text-base"></i> 50.8%
                            </span>
                        </div>
                    </div>
                    <div class="reports-stat-chart"></div>
                </div>
            </div>
            <!-- Account balance chart -->
            <div class="reports-ac-balance overflow-x-hidden"></div>
        </div>
        <div class="grid grid-cols-1 gap-4 xxl:gap-6 mt-5">
            <!-- Bendfit enrolled Management -->
            <div class="box col-span-12 lg:col-span-6">
                <div class="flex justify-between items-center gap-4 flex-wrap bb-dashed mb-4 pb-4 lg:mb-6 lg:pb-6">
                    <h4 class="h4">Benefit Enrolled User list</h4>
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
                    <button class="btn-primary ac-modal-btn">
                        <i class="las la-plus-circle text-base md:text-lg"></i>
                        CSV
                    </button>
                    <button class="btn-primary ac-modal-btn">
                        <i class="las la-plus-circle text-base md:text-lg"></i>
                        PDF
                    </button>
                    <table class="w-full whitespace-nowrap" id="payment-account">
                        <thead>
                            <tr class="bg-secondary/5 dark:bg-bg3">
                                <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        User name
                                    </div>
                                </th>
                                <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        Email
                                    </div>
                                </th>
                                <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        Whom by
                                    </div>
                                </th>
                                <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        Enrolled date by user
                                    </div>
                                </th>
                                <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        Enrolled <br>start <br>date
                                    </div>
                                </th>

                                <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        Enrolled<br> end <br>date
                                    </div>
                                </th>
                                <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        status
                                    </div>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="even:bg-secondary/5 dark:even:bg-bg3">
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">doe</p>
                                    </div>
                                </td>
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">doe@yopmail.com</p>
                                    </div>
                                </td>
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">Vendor</p>
                                    </div>
                                </td>
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">2022-10-22</p>
                                    </div>

                                </td>
                                <td class="py-2">
                                    <div>
                                        <p class="font-medium mb-1">2022-09-22</p>

                                    </div>
                                </td>

                                <td class="py-2">
                                    <div>
                                        <p class="font-medium mb-1">2024-09-22</p>

                                    </div>
                                </td>
                                <td class="py-2">
                                    <span
                                        class="block text-xs w-28 xxl:w-36 text-center rounded-[30px] dark:border-n500 border border-n30 py-2 bg-primary/10 dark:bg-bg3 text-primary">
                                        Completed
                                    </span>
                                </td>

                            </tr>

                            <tr class="odd:bg-secondary/5 dark:odd:bg-bg3">
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">doe</p>
                                    </div>
                                </td>
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">doe@yopmail.com</p>
                                    </div>
                                </td>
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">Self</p>
                                    </div>
                                </td>
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">2022-10-22</p>
                                    </div>

                                </td>
                                <td class="py-2">
                                    <div>
                                        <p class="font-medium mb-1">2022-09-22</p>

                                    </div>
                                </td>

                                <td class="py-2">
                                    <div>
                                        <p class="font-medium mb-1">2024-09-22</p>

                                    </div>
                                </td>
                                <td class="py-2">
                                    <span
                                        class="block text-xs w-28 xxl:w-36 text-center rounded-[30px] dark:border-n500 border border-n30 py-2 bg-primary/10 dark:bg-bg3 text-primary">
                                        Completed
                                    </span>
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

        <div class="grid grid-cols-1 gap-4 xxl:gap-6 mt-5">

            <!-- Claim Management -->
            <div class="box col-span-12 lg:col-span-6">
                <div class="flex justify-between items-center gap-4 flex-wrap bb-dashed mb-4 pb-4 lg:mb-6 lg:pb-6">
                    <h4 class="h4">Claim pendings Request list</h4>
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
                    <button class="btn-primary ac-modal-btn">
                        <i class="las la-plus-circle text-base md:text-lg"></i>
                        CSV
                    </button>
                    <button class="btn-primary ac-modal-btn">
                        <i class="las la-plus-circle text-base md:text-lg"></i>
                        PDF
                    </button>
                    <table class="w-full whitespace-nowrap" id="payment-account">
                        <thead>
                            <tr class="bg-secondary/5 dark:bg-bg3">
                                <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        User name
                                    </div>
                                </th>
                                <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        Enrolled date by user
                                    </div>
                                </th>
                                <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        Enrolled <br>start <br>date
                                    </div>
                                </th>

                                <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        Enrolled<br> end <br>date
                                    </div>
                                </th>
                                <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        status
                                    </div>
                                </th>
                                <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        Days left
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="even:bg-secondary/5 dark:even:bg-bg3">
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">John</p>
                                    </div>
                                </td>
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">2022-10-22</p>
                                    </div>

                                </td>
                                <td class="py-2">
                                    <div>
                                        <p class="font-medium mb-1">2022-09-22</p>

                                    </div>
                                </td>

                                <td class="py-2">
                                    <div>
                                        <p class="font-medium mb-1">2024-09-22</p>

                                    </div>
                                </td>
                                <td class="py-2">
                                    <span
                                        class="block text-xs w-28 xxl:w-36 text-center rounded-[30px] dark:border-n500 border border-n30 py-2 bg-primary/10 dark:bg-bg3 text-primary">
                                        Submission
                                    </span>
                                </td>
                                <td class="py-2">
                                    <div>
                                        <p class="font-medium">3</p>
                                    </div>
                                </td>

                            </tr>

                            <tr class="odd:bg-secondary/5 dark:odd:bg-bg3">
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">Danny</p>
                                    </div>
                                </td>
                                <td class="py-2 px-6">
                                    <div class="flex items-center gap-3">
                                        <p class="font-medium mb-1">2022-10-22</p>
                                    </div>

                                </td>
                                <td class="py-2">
                                    <div>
                                        <p class="font-medium mb-1">2022-09-22</p>

                                    </div>
                                </td>

                                <td class="py-2">
                                    <div>
                                        <p class="font-medium mb-1">2024-09-22</p>

                                    </div>
                                </td>
                                <td class="py-2">
                                    <span
                                        class="block text-xs w-28 xxl:w-36 text-center rounded-[30px] dark:border-n500 border border-n30 py-2 bg-primary/10 dark:bg-bg3 text-primary">
                                        Submission
                                    </span>
                                </td>
                                <td class="py-2">
                                    <div>
                                        <p class="font-medium">3</p>
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