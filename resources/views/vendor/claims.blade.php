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
                                        User <br>Claim <br>Amount
                                    </div>
                                </th>
                                <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        Company <br>Claim<br> Amount
                                    </div>
                                </th>
                                <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        Start <br>Period
                                    </div>
                                </th>
                                <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        End <br>Period
                                    </div>
                                </th>
                                <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        User <br>Enrolled<br> At
                                    </div>
                                </th>
                              
                                <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        Action
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

                                        

                                        <td class="py-2 text-center">
                                            <div class="flex gap-2 justify-center">
                                                <form method="POST" action="{{ route('vendor.approve.status', $claim['id']) }}">
                                                    @csrf

                                                    <button type="submit"
                                                        class="text-xs px-3 py-1 rounded-full bg-green-100 text-green-600 hover:bg-green-200">
                                                        Approve
                                                    </button>
                                                </form>
                                                <form method="POST" action="{{ route('vendor.reject.status', $claim['id']) }}">
                                                    @csrf
                                                    <button type="submit"
                                                        class="text-xs px-3 py-1 rounded-full bg-red-100 text-red-600 hover:bg-red-200">
                                                        Reject
                                                    </button>
                                                </form>
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