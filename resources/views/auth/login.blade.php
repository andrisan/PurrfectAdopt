@extends('auth.mainauth')

@section('heading')
    <h1 class="text-xl font-semibold">Welcome back</h1>
    <small class="text-gray-400">Welcome back! Please enter your details</small>
@endsection

@section('form')
    <form class="mt-4" action="/login" method="POST">
        @csrf
        <div class="mb-3">
            <label class="mb-2 block text-xs font-semibold" for="email">Email</label>
            <input type="email" placeholder="Enter your email" name="email" value="{{ old('email') }}" id="email" class="block w-full rounded-md border border-gray-300 focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 py-1 px-1.5 text-gray-500" />
        </div>

        <div class="mb-3">
            <label class="mb-2 block text-xs font-semibold" for="password">Password</label>
            <input type="password" placeholder="*****" name="password" id="password" class="block w-full rounded-md border border-gray-300 focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 py-1 px-1.5 text-gray-500" />
        </div>

        <div class="mb-3 flex flex-wrap content-center">
            <a href="/forgot-password" class="text-xs font-semibold text-yellow-700">Forgot password?</a>
        </div>

        <div class="mb-3">
            <button class="mb-1.5 block w-full text-center text-white bg-yellow-500 hover:bg-yellow-700 px-2 py-1.5 rounded-md">Sign in</button>
        </div>
    </form>
@endsection

@section('footer')
    <span class="text-xs text-gray-400 font-semibold">Don't have account?</span>
    <a href="/register" class="text-xs font-semibold text-yellow-700">Sign up</a>
@endsection