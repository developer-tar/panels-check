<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @vite('resources/css/hr/app.scss')
    <title>Hr - sign-up</title>
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
        <img src="{{ asset('assets/images/hr-ellipse1.png') }}"
            class="absolute top-16 md:top-5 ltr:right-10 rtl:left-10" alt="ellipse" />
        <img src="{{ asset('assets/images/ellipse2.png') }}"
            class="absolute bottom-6 ltr:left-0 rtl:right-0 ltr:sm:left-32 rtl:sm:right-32" alt="ellipse" />

        <img src="{{ asset('assets/images/logo/hr-logo.png') }}" alt="logo"
            class="logo-full2 lg:block p-6 lg:p-8 relative z-[2]" />

        <div class="flex items-center justify-center mt-7">
            <div class="relative z-[2] max-w-[1416px] mx-auto px-3 pb-10">
                <div
                    class="box xl:p-6 dark:bg-bg4 grid grid-cols-12 gap-4 xxxl:gap-6 items-center shadow-[0px_6px_30px_0px_rgba(0,0,0,0.04)]">
                    <div class="col-span-12 lg:col-span-7">
                        <!--form -->
                        @include('common.sign-up', ['key' => 'hr'])
                        <!--form -->
                    </div>
                    <div class="col-span-12 lg:col-span-5 flex justify-center items-center">
                        <img src="{{ asset('assets/images/auth.png') }}" alt="img" width="533" height="560" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/hr/app.js')
</body>

</html>
@include('common.sign-in-script');