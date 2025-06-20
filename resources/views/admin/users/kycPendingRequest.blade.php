@extends('layout.admin.main')

@push('page-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap/dist/css/jsvectormap.min.css" />
@endpush

@section('content')
<div class="main-inner">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
        <h2 class="h2">Pending Request</h2>

    </div>

    <div class="grid grid-cols-1 gap-4 xxl:gap-6">
        <!-- User Management -->
        <div class="box col-span-12 lg:col-span-6">
            <div class="flex justify-between items-center gap-4 flex-wrap bb-dashed mb-4 pb-4 lg:mb-6 lg:pb-6">
                <h4 class="h4">Users</h4>

            </div>
            <div class="overflow-x-auto pb-4 lg:pb-6">
                <table class="w-full whitespace-nowrap" id="payment-account">
                    <thead>
                        <tr class="bg-secondary/5 dark:bg-bg3">
                            <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Document
                                </div>
                            </th>
                            <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Document Type
                                </div>

                            </th>
                            <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Document Number
                                </div>

                            </th>
                            <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Company Name
                                </div>
                            </th>
                            <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Name
                                </div>
                            </th>
                            <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Age
                                </div>
                            </th>
                            <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Country
                                </div>
                            </th>
                            <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Salary/income
                                </div>
                            </th>
                            <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Experience
                                </div>
                            </th>
                            <th class="text-start !py-5 min-w-[130px] cursor-pointer">
                                <div class="flex items-center gap-1">
                                    Email
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
                        @foreach($users as $user)
                        <tr class="even:bg-secondary/5 dark:even:bg-bg3">
                            <td class="py-2 px-6">
                                <div class="flex items-center gap-3">
                                    @if($user['identity_document'])
                                    <a href="{{ asset($user['identity_document']) }}" download
                                        class="text-blue-500 underline">
                                        Download
                                    </a>
                                    @else
                                    <span class="text-gray-500">No document</span>
                                    @endif

                                </div>
                            </td>
                            <td class="py-2 px-6">
                                <div class="flex items-center gap-3">
                                    @if(isset($user['doc_type']))
                                    <p class="font-medium mb-1">{{ $user['doc_type'] }}</p>
                                    @else
                                    <p class="font-medium mb-1">N/A</p>
                                    @endif

                                </div>

                            </td>
                            <td class="py-2 px-6">
                                <div class="flex items-center gap-3">
                                    @if(isset($user['doc_number']))
                                    <p class="font-medium mb-1">{{ $user['doc_number'] }}</p>
                                    @else
                                    <p class="font-medium mb-1">N/A</p>
                                    @endif

                                </div>

                            </td>
                            <td class="py-2 px-6">
                                <div class="flex items-center gap-3">
                                    @if(isset($user['company_name']))
                                    <p class="font-medium mb-1">{{ $user['company_name'] }}</p>
                                    @else
                                    <p class="font-medium mb-1">N/A</p>
                                    @endif

                                </div>

                            </td>
                            <td class="py-2 px-6">
                                <div class="flex items-center gap-3">
                                    <p class="font-medium mb-1">{{ $user['name'] }}</p>
                                </div>

                            </td>
                            <td class="py-2">
                                <div>
                                    @if(isset($user['age']))
                                    <p class="font-medium mb-1">{{ $user['age'] }}</p>
                                    @else
                                    <p class="font-medium mb-1">N/A</p>
                                    @endif


                                </div>
                            </td>
                            <td class="py-2">
                                <div>
                                    @if(isset($user['country']))
                                    <p class="font-medium mb-1">{{ $user['country'] }}</p>
                                    @else
                                    <p class="font-medium mb-1">N/A</p>
                                    @endif


                                </div>
                            </td>
                            <td class="py-2">
                                <div>
                                    @if(isset($user['salary']))
                                    <p class="font-medium mb-1">{{ $user['salary'] }}</p>
                                    @else
                                    <p class="font-medium mb-1">N/A</p>
                                    @endif

                                </div>
                            </td>
                            <td class="py-2">
                                <div>
                                    @if(isset($user['exp']))
                                    <p class="font-medium mb-1">{{ $user['exp'] }}</p>
                                    @else
                                    <p class="font-medium mb-1">N/A</p>
                                    @endif
                                </div>
                            </td>
                            <td class="py-2">
                                <div>
                                    @if(isset($user['email']))
                                    <p class="font-medium mb-1">{{ $user['email'] }}</p>
                                    @else
                                    <p class="font-medium mb-1">N/A</p>
                                    @endif
                                </div>
                            </td>
                            <td class="py-2 text-center">
                                <div class="flex gap-2 justify-center">
                                    <form method="POST" action="{{ route('admin.user.approve', $user['id']) }}">
                                        @csrf

                                        <button type="submit"
                                            class="text-xs px-3 py-1 rounded-full bg-green-100 text-green-600 hover:bg-green-200">
                                            Approve
                                        </button>
                                    </form>
                                    <form method="POST" action="{{ route('admin.user.reject', $user['id']) }}">
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
                    </tbody>
                </table>
            </div>
            <div class="flex col-span-12 gap-4 sm:justify-between justify-center items-center flex-wrap">
                <p>
                    Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{ $users->total() }}
                    entries
                </p>

                {{ $users->onEachSide(1)->links('common.pagination') }}
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