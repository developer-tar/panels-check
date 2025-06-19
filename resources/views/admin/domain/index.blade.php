@extends('layout.admin.main')

@push('page-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap/dist/css/jsvectormap.min.css" />
@endpush

@section('content')
    <div class="main-inner">
        <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
            <h2 class="h2">Domain Management</h2>
            <a href="{{route('admin.domain.create')}}" class="btn-primary inline-flex items-center">
                <i class="las la-plus-circle text-base md:text-lg"></i>
                <span class="ml-1">Add an new Domain</span>
            </a>
        </div>

        <div class="grid grid-cols-1 gap-4 xxl:gap-6">
            <!-- Domain Management -->
            <div class="box col-span-12 lg:col-span-6">
                <div class="flex justify-between items-center gap-4 flex-wrap bb-dashed mb-4 pb-4 lg:mb-6 lg:pb-6">
                    <h4 class="h4">Domains</h4>
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
                                        Name
                                    </div>
                                </th>
                                <th class="text-start !py-5 px-6 min-w-[230px] cursor-pointer">
                                    <div class="flex items-center gap-1">
                                        Description
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($domains as $domain)

                                <tr class="even:bg-secondary/5 dark:even:bg-bg3">
                                   
                                    <td class="py-2 px-6">
                                        <div class="flex items-center gap-3">
                                            <p class="font-medium mb-1">{{ $domain['name'] }}</p>
                                        </div>

                                    </td>
                                    <td class="py-2">
                                        <div>
                                            <p class="font-medium mb-1">{{ $domain['description'] }}</p>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="flex col-span-12 gap-4 sm:justify-between justify-center items-center flex-wrap">
                    <p>
                        Showing {{ $domains->firstItem() }} to {{ $domains->lastItem() }} of {{ $domains->total() }}
                        entries
                    </p>

                    {{ $domains->onEachSide(1)->links('common.pagination') }}
                </div>

            </div>

        </div>
    </div>
@endsection