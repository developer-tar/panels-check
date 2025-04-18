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
                            <button class="menu-btn border-n30 bg-n0 dark:!border-n500 dark:bg-bg4">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="menu-icon">
                                        <i class="las la-home"></i>
                                    </span>
                                    <span class="menu-title font-medium">Dashboard</span>
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
                                    <a href="{{ route('admin.dashboard.index1') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Style 01</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.dashboard.index2') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Style 02</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.dashboard.index3') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Style 03</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.dashboard.index4') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Style 04</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.dashboard.index5') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Style 05</span>
                                    </a>
                                </li>
                            </ul>
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
                                        <i class="las la-setting"></i>
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
                        <!-- tracking logs -->
                        <li class="menu-li">
                            <a href="{{route('admin.logs')}}" class="menu-link">
                                <i class="las la-puzzle-piece"></i>
                                <span>Logs</span>
                            </a>
                        </li>

                        <!-- plans -->
                        <li class="menu-li">
                            <button class="menu-btn border-n30 bg-n0 dark:!border-n500 dark:bg-bg4">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="menu-icon">
                                        <i class="las la-users"></i>
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
                                        <i class="las la-users"></i>
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
                                        <i class="las la-users"></i>
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
                                        <i class="las la-users"></i>
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
                         <!-- Claim Record-->
                         <li class="menu-li">
                            <a href="{{route('admin.claims.billing')}}" class="menu-link">
                                <i class="las la-puzzle-piece"></i>
                                <span>claim Management</span>
                            </a>
                        </li>
                        <!-- notiification -->

                         
                         <li class="menu-li">
                            <button class="menu-btn border-n30 bg-n0 dark:!border-n500 dark:bg-bg4">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="menu-icon">
                                        <i class="las la-users"></i>
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
                                        <i class="las la-exchange-alt"></i>
                                    </span>
                                    <span class="menu-title font-medium">Transaction</span>
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
                                    <a href="{{ route('transaction.style1') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Style 01</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('transaction.style2') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Style 02</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('transaction.style3') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Style 03</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                   
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
                                    <a href="{{ route('reports.style1') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Style 01</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('reports.style2') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Style 02</span>
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
                                <li>
                                    <a href="{{ route('settings.social.network') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Social Network</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('settings.notification') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Notification</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('settings.payment.limit') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Payment Limits</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-li">
                            <button class="menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="menu-icon">
                                        <i class="las la-user-circle"></i>
                                    </span>
                                    <span class="menu-title font-medium">Authentication</span>
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
                                    <a href="{{ route('auth.sign.up') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Sign Up</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('auth.sign.in') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Sign In</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('auth.sign.in.qrcode') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Sign In QR Code</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('auth.error') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Error Page</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-li">
                            <button class="menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4">
                                <span class="flex items-center justify-center gap-2">
                                    <span class="menu-icon">
                                        <i class="las la-handshake"></i>
                                    </span>
                                    <span class="menu-title font-medium">Support</span>
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
                                    <a href="{{ route('support.help.center') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Help Center</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('support.privacy.policy') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Privacy Policy</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('support.contact.us') }}" class="submenu-link">
                                        <i class="las la-minus text-xl"></i>
                                        <span>Contact Us</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-li">
                            <a href="{{route('components')}}" class="menu-link">
                                <i class="las la-puzzle-piece"></i>
                                <span>Components</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="px-4 xxl:px-6 xxxl:px-8">
                    <div class="balance-part">
                        <p class="border-t-2 border-dashed border-primary/20 py-4 text-xs font-semibold lg:py-6">
                            Balance
                        </p>
                        <ul>
                            <li>
                                <button
                                    class="group flex w-full items-center justify-between rounded-xl px-4 py-2.5 lg:py-3 xxxl:px-6">
                                    <span class="flex items-center gap-2">
                                        <span class="-mb-1 self-center text-primary">
                                            <i class="las la-dollar-sign"></i>
                                        </span>
                                        <span class="font-medium">33,215.00 USD</span>
                                    </span>
                                </button>
                                <button
                                    class="group flex w-full items-center justify-between rounded-xl px-4 py-2.5 lg:py-3 xxxl:px-6">
                                    <span class="flex items-center gap-2">
                                        <span class="-mb-1 self-center text-primary">
                                            <i class="las la-euro-sign"></i>
                                        </span>
                                        <span class="font-medium">15,254.32 EUR</span>
                                    </span>
                                </button>
                                <button
                                    class="group flex w-full items-center justify-between rounded-xl px-4 py-2.5 lg:py-3 xxxl:px-6">
                                    <span class="flex items-center gap-2">
                                        <span class="-mb-1 self-center text-primary">
                                            <i class="las la-pound-sign"></i>
                                        </span>
                                        <span class="font-medium">7,029.14 GBP</span>
                                    </span>
                                </button>
                                <button
                                    class="group flex w-full items-center justify-between rounded-xl px-4 py-2.5 lg:py-3 xxxl:px-6">
                                    <span class="flex items-center gap-2">
                                        <span class="-mb-1 self-center text-primary">
                                            <i class="las la-plus-circle"></i>
                                        </span>
                                        <span class="font-medium">Add More Balance</span>
                                    </span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="upgrade-part">
                        <img src="{{ asset('assets/images/upgrade.png') }}" width="272" height="173" alt="upgrade" />
                        <p class="mb-8 mt-6 text-sm">
                            Upgrade your account to
                            <span class="font-semibold text-primary">PRO</span> for even
                            more examples.
                        </p>
                        <a href="#" class="btn-primary flex w-full justify-center">
                            Upgrade Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>