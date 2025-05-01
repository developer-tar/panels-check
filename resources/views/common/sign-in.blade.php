<form class="col-span-12 lg:col-span-7" method="post" action="{{route($key.'.auth.authenticate')}}">
    @csrf
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
            <button type="submit" class="btn-primary px-5">
                Login
            </button>
        </div>
    </div>
</form>