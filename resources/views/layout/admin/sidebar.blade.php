<!-- Vertical -->
<aside id="sidebar" class="sidebar bg-n0 dark:!bg-bg4">
    <div class="sidebar-inner relative">
        <div class="logo-column">
            <div class="logo-container">
                <div class="logo-inner">
                    <a href="{{ route('admin.dashboard.index1') }}" class="logo-wrapper">
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
                            <a href="{{route('admin.dashboard.index1')}}" class="menu-link">
                                <i class="las la-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <!-- user -->
                        <li class="menu-li">
                            <button class="menu-btn border-n30 bg-n0 dark:!border-n500 dark:bg-bg4">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="menu-icon">
                                        <i class="las la-users"></i>
                                    </span>
                                    <span class="menu-title font-medium">Users</span>
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
                                    <a href="{{ route('admin.user.index') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>List/Manage</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('admin.user.create') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Register</span>
                                    </a>
                                </li>

                            </ul>


                        </li>
                        <!-- Roles -->
                        <li class="menu-li">
                            <button class="menu-btn border-n30 bg-n0 dark:!border-n500 dark:bg-bg4">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="menu-icon">
                                        <i class="las la-chalkboard"></i>
                                    </span>
                                    <span class="menu-title font-medium">Roles</span>
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
                                    <a href="{{ route('admin.role.index') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>List/Manage</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('admin.role.create') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Add</span>
                                    </a>
                                </li>

                            </ul>


                        </li>


                        <!-- plans -->
                        <li class="menu-li">
                            <button class="menu-btn border-n30 bg-n0 dark:!border-n500 dark:bg-bg4">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="menu-icon">
                                        <i class="las la-chart-area"></i>
                                    </span>
                                    <span class="menu-title font-medium">plans</span>
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
                                    <a href="{{ route('admin.plan.index') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>List/Manage</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('admin.plan.create') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Add</span>
                                    </a>
                                </li>

                            </ul>


                        </li>
                        <!-- benefits enrollment -->
                        <li class="menu-li">
                            <button class="menu-btn border-n30 bg-n0 dark:!border-n500 dark:bg-bg4">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="menu-icon">
                                        <i class="las la-hand-holding-heart"></i>
                                    </span>
                                    <span class="menu-title font-medium">Benefit Enroll</span>
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
                                    <a href="{{ route('admin.benefit.index') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>List/Manage</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('admin.benefit.create') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Add</span>
                                    </a>
                                </li>

                            </ul>


                        </li>
                        <!-- Hr -->
                        <li class="menu-li">
                            <button class="menu-btn border-n30 bg-n0 dark:!border-n500 dark:bg-bg4">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="menu-icon">
                                        <i class="las la-chart-bar"></i>
                                    </span>
                                    <span class="menu-title font-medium">HRs Management</span>
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
                                    <a href="{{ route('admin.hr.index') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>List/Manage</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('admin.hr.create') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Register</span>
                                    </a>
                                </li>

                            </ul>


                        </li>
                        <!-- Vendor -->
                        <li class="menu-li">
                            <button class="menu-btn border-n30 bg-n0 dark:!border-n500 dark:bg-bg4">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="menu-icon">
                                        <i class="las la-store"></i>
                                    </span>
                                    <span class="menu-title font-medium">Vendor Management</span>
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
                                    <a href="{{ route('admin.vendor.index') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>List/Manage</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('admin.vendor.create') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Register</span>
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
                                    <span class="menu-title font-medium">Notification Settings</span>
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
                                    <a href="{{ route('admin.notification.index') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>List/Manage</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('admin.notification.create') }}" class="submenu-link">
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
                                    <a href="{{ route('admin.analytics') }}" class="submenu-link">
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
                                    <a href="{{ route('settings.profile') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('settings.security') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Security</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="menu-li">
                            <a href="{{route('transaction.style1')}}" class="menu-link">
                                <i class="las la-exchange-alt"></i>
                                <span>Tranaction</span>
                            </a>
                        </li>

                    
                        <!-- tracking logs -->
                        <li class="menu-li">
                            <a href="{{route('admin.logs')}}" class="menu-link">
                                <i class="las la-puzzle-piece"></i>
                                <span>Logs</span>
                            </a>
                        </li>
                          <!-- Claim Record-->
                          <li class="menu-li">
                            <a href="{{route('admin.claims.billing')}}" class="menu-link">
                                <i class="las la-puzzle-piece"></i>
                                <span>claim Management</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</aside>