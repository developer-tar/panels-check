<form class="col-span-12 lg:col-span-7" method="post" action="{{route($key . '.auth.sign-up-process')}}">
    @csrf

    <div class="box bg-primary/5 dark:bg-bg3 lg:p-6 xl:p-8 border border-n30 dark:border-n500">
        <h3 class="h3 mb-4">Let&apos;s Get Started!</h3>
        <p class="md:mb-6 pb-4 mb-4 md:pb-6 bb-dashed text-sm md:text-base">
            Please Enter your Email Address to Start your Online Application
        </p>
        <div class="grid grid-cols-2 gap-x-4 xxxl:gap-x-6">
            <div class="col-span-2 md:col-span-1">
                <label for="name" class="md:text-lg font-medium block mb-1">
                    First Name
                </label>
                <input type="name"
                    class="w-full text-sm bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3 mb-2"
                    placeholder="Jone" id="fname" name="first_name" value="{{ old('first_name') }}" />
            </div>
            <div class="col-span-2 md:col-span-1">
                <label for="lname" class="md:text-lg font-medium block mb-1">
                    Last Name
                </label>
                <input type="lname"
                    class="w-full text-sm bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3 mb-2"
                    placeholder="Doe" id="lname" name="last_name" value="{{ old('last_name') }}" />
            </div>
        </div>
        <label for="email" class="md:text-lg font-medium block mb-4">
            Enter Your Email ID
        </label>
        <div class="mb-4">
            <input type="text"
                class="w-full text-sm bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3 @error('email') is-invalid @enderror"
                placeholder="Enter Your Email" id="email" name="email" value="{{ old('email') }}" />
            @error('email')
                <div class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <label for="password" class="md:text-lg font-medium block mb-4">
            Enter Your Password
        </label>
        <div class="col-span-2 md:col-span-1 ">
            <div id="passwordfield"
                class="bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-2.5 relative">
                <input type="password" class="w-11/12 text-sm bg-transparent p-0 border-none "
                    placeholder="Enter Password" id="password2" name="password" />
                <span class="absolute eye-icon ltr:right-5 rtl:left-5 top-1/2 -translate-y-1/2 cursor-pointer "
                    id="toggleBtn">
                    <i class="las la-eye" style="display: none;"></i>
                    <i class="las la-eye-slash"></i>
                </span>
                @error('password')
                    <div class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <p class="mt-2">
            Do have an account?
            <a class="text-primary" href="{{route($key.'.auth.sign-in')}}">
                Login here
            </a>


        </p>
        <div class="mt-8">
            <button type="submit" class="btn-primary px-5">
                Sign Up
            </button>

        </div>
    </div>
</form>