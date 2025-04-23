<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('assets/images/admin-uniwersal-logo.png') }}" type="image/x-icon" />
    @vite('resources/css/app.scss')
    <title>Admin -signin</title>
</head>

<body class="vertical bg-secondary/5 dark:bg-bg3">
    <!-- Loader -->
    {{-- <div
        class="loader flex items-center justify-center min-w-screen min-h-screen fixed !z-50 inset-0 bg-n0 dark:bg-bg4">
        <svg viewBox="25 25 50 50">
            <circle r="20" cy="50" cx="50"></circle>
        </svg>
    </div> --}}
    <div class="relative min-h-screen bg-secondary/5 dark:bg-bg3">
        <img src="{{ asset('assets/images/ellipse1.png') }}" class="absolute top-16 md:top-5 ltr:right-10 rtl:left-10"
            alt="ellipse" />
        <img src="{{ asset('assets/images/ellipse2.png') }}"
            class="absolute bottom-6 ltr:left-0 rtl:right-0 ltr:sm:left-32 rtl:sm:right-32" alt="ellipse" />

        <img src="{{ asset('assets/images/Uniwersal.png') }}" alt="logo"
            class="logo-full2 lg:block p-6 lg:p-8 relative z-[2]" />

        <div class="flex items-center justify-center mt-7">
            <div class="relative z-[2] max-w-[1416px] mx-auto px-3 pb-10">
                <div class="box p-3 md:p-4 xl:p-6 grid grid-cols-12 gap-6 items-center">
                    <!-- form start -->
                    <div id="loginForm" class="col-span-12 lg:col-span-7">
                        <div class="box bg-primary/5 dark:bg-bg3 lg:p-6 xl:p-8 border border-n30 dark:border-n500">
                            <h3 class="h3 mb-4">Welcome Back!</h3>
                            <p class="md:mb-6 md:pb-6 mb-4 pb-4 bb-dashed text-sm md:text-base">
                                Sign in to your account and join us
                            </p>
                            <label for="email" class="md:text-lg font-medium block mb-4">
                                Enter Your Email ID
                            </label>
                            <div class="mb-4">
                                <input type="text"
                                    class="w-full text-sm bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
                                    placeholder="Enter Your Email" id="email" />
                            </div>
                            <label for="password" class="md:text-lg font-medium block mb-4">
                                Enter Your Password
                            </label>
                            <div class="col-span-2 md:col-span-1">
                                <div id="passwordfield"
                                    class="bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-2.5 relative">
                                    <input type="password" class="w-11/12 text-sm bg-transparent p-0 border-none"
                                        placeholder="Enter Password" id="password2" />
                                    <span
                                        class="absolute eye-icon ltr:right-5 rtl:left-5 top-1/2 -translate-y-1/2 cursor-pointer"
                                        id="toggleBtn">
                                        <i class="las la-eye" style="display: none;"></i>
                                        <i class="las la-eye-slash"></i>
                                    </span>
                                </div>
                            </div>

                            <a href="#" class="flex justify-end text-primary mt-4">
                                Forgot Password?
                            </a>
                            <p class="mt-3">
                                Don&apos;t have an account?
                                <a class="text-primary" href="{{route('admin.auth.sign-up')}}">
                                    Signup
                                </a>
                            </p>
                            <div class="mt-8 flex gap-6">
                                <a type="submit" class="btn-primary px-5" href="{{route('admin.dashboard.index')}}">
                                    Login
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--form end -->
                    <div class="col-span-12 lg:col-span-5">
                        <img src="{{ asset('assets/images/auth.png') }}" alt="img" width="533" height="560" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>

</html>