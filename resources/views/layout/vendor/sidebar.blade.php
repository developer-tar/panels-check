<!-- Vertical -->
<aside id="sidebar" class="sidebar bg-n0 dark:!bg-bg4">
    <div class="sidebar-inner relative">
        <div class="logo-column">
            <div class="logo-container">
                <div class="logo-inner">
                    <a href="{{ route('vendor.dashboard.index') }}" class="logo-wrapper">
                        <img src="{{ asset('assets/images/logo-with-text.png') }}" width="174" height="38"
                            class="logo-full" alt="logo" />
                        <img src="{{ asset('assets/images/logo.png') }}" width="37" height="36" class="logo-icon hidden"
                            alt="logo" />
                    </a>
                    <img width="141" height="38" class="logo-text hidden"
                        src="{{ asset('assets/images/logo-text.png') }}" alt="logo text" />
                    <button class="sidebar-close-btn xl:hidden" id="sidebar-close-btn">
                        <i class="las la-times"></i>
                    </button>
                </div>
            </div>
            <div class="menu-container pb-28">
                <div class="menu-wrapper">
                    <p class="menu-heading">Navigation</p>
                    <ul class="menu-ul">
                        <li class="menu-li">
                            <a href="{{route('vendor.dashboard.index')}}" class="menu-link">
                                <i class="las la-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    
                        <!-- plans -->
                        <li class="menu-li">
                            <button class="menu-btn border-n30 bg-n0 dark:!border-n500 dark:bg-bg4">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="menu-icon">
                                        <i class="las la-chart-area"></i>
                                    </span>
                                    <span class="menu-title font-medium">plans/benefit add</span>
                                </span>
                                <span class="plus-minus">
                                    <i class="las la-plus text-xl"></i>
                                    <i class="las la-minus text-xl"></i>
                                </span>
                                <span class="chevron-down hidden">
                                    <i class="las la-angle-down text-base"></i>
                                </span>
                            </button>
                            <ul class="submenu-hide submenu">
                                <li>
                                    <a href="{{ route('vendor.plan.index') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>List/Manage</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('vendor.plan.create') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Add</span>
                                    </a>
                                </li>

                            </ul>


                        </li>
                       
                     
                      
                        <!-- notification -->


                        <li class="menu-li">
                            <button class="menu-btn border-n30 bg-n0 dark:!border-n500 dark:bg-bg4">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="menu-icon">
                                        <i class="las la-bell"></i>
                                    </span>
                                    <span class="menu-title font-medium">Notification</span>
                                </span>
                                <span class="plus-minus">
                                    <i class="las la-plus text-xl"></i>
                                    <i class="las la-minus text-xl"></i>
                                </span>
                                <span class="chevron-down hidden">
                                    <i class="las la-angle-down text-base"></i>
                                </span>
                            </button>
                            <ul class="submenu-hide submenu">
                                <li>
                                    <a href="{{ route('vendor.notification.index') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>List/Manage</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('vendor.notification.create') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Add</span>
                                    </a>
                                </li>

                            </ul>


                        </li>
                        <!-- Reports -->
                        <li class="menu-li">
                            <button class="menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="menu-icon">
                                        <i class="las la-chart-pie"></i>
                                    </span>
                                    <span class="menu-title font-medium">Reports</span>
                                </span>
                                <span class="plus-minus">
                                    <i class="las la-plus text-xl"></i>
                                    <i class="las la-minus text-xl"></i>
                                </span>
                                <span class="chevron-down hidden">
                                    <i class="las la-angle-down text-base"></i>
                                </span>
                            </button>
                            <ul class="submenu-hide submenu">
                                <li>
                                    <a href="{{ route('vendor.analytics') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>manage</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                      
                        <li class="menu-li">
                            <button class="menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="menu-icon">
                                        <i class="las la-cog"></i>
                                    </span>
                                    <span class="menu-title font-medium">Settings</span>
                                </span>
                                <span class="plus-minus">
                                    <i class="las la-plus text-xl"></i>
                                    <i class="las la-minus text-xl"></i>
                                </span>
                                <span class="chevron-down hidden">
                                    <i class="las la-angle-down text-base"></i>
                                </span>
                            </button>
                            <ul class="submenu-hide submenu">
                                <li>
                                    <a href="{{ route('vendor.profile') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                

                            </ul>
                        </li>

                        <li class="menu-li">
                            <a href="{{route('vendor.transaction')}}" class="menu-link">
                                <i class="las la-exchange-alt"></i>
                                <span>Transaction & Invoice</span>
                            </a>
                        </li>

                    
                        <!-- tracking logs -->
                        <li class="menu-li">
                            <a href="{{route('vendor.logs')}}" class="menu-link">
                                <i class="las la-puzzle-piece"></i>
                                <span>Logs</span>
                            </a>
                        </li>
                          <!-- Claim Record-->
                          <li class="menu-li">
                            <a href="{{route('vendor.claims.billing')}}" class="menu-link">
                                <i class="las la-money-check"></i>
                                <span>claim Management</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</aside>