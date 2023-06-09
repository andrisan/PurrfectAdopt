<!DOCTYPE html>
<html lang="en">
    <head>
    @include('components.head')
    </head>
        <body>
            <!-- Container -->
            <div class="flex flex-wrap min-h-screen w-full content-center justify-center bg-grey-700 py-10">
                
                <!-- Login component -->
                <div class="flex shadow-md">
                    <!-- Login form -->
                    <div class="flex flex-wrap content-center justify-center rounded-l-md bg-white" style="width: 24rem; height: 32rem;">
                        <div class="w-72">
                        <!-- Heading -->
                        <h1 class="text-xl font-semibold">Welcome back</h1>
                        <small class="text-gray-400">Welcome back! Please enter your details</small>

                        @include('components.error')

                        <!-- Form -->
                        <form class="mt-4" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="mb-2 block text-xs font-semibold">Email</label>
                                <input type="email" placeholder="Enter your email" value="{{ old('email') }}" name="email" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 block text-xs font-semibold">Password</label>
                                <input type="password" placeholder="*****" name="password" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
                            </div>

                            <div class="mb-3 flex flex-wrap content-center">
                                <a href="/forgot-password" class="text-xs font-semibold text-purple-700">Forgot password?</a>
                            </div>

                            <div class="mb-3">
                                <button class="mb-1.5 block w-full text-center text-white bg-purple-700 hover:bg-purple-900 px-2 py-1.5 rounded-md">Sign in</button>
                            </div>
                        </form>

                        <!-- Footer -->
                        <div class="text-center">
                            <span class="text-xs text-gray-400 font-semibold">Don't have account?</span>
                            <a href="/register" class="text-xs font-semibold text-purple-700">Sign up</a>
                        </div>
                    </div>
                </div>

                <!-- Login banner -->
                @include('components.banner')
            </div>
        </div>
    </body>
</html>