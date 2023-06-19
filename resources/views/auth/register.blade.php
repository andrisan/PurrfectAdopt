@extends('auth.mainauth')

@section('heading')
  <h1 class="text-xl font-semibold">Sign up</h1>
  <small class="text-gray-400">Welcome! Please register your details</small>
@endsection

@section('form')
  <form class="mt-4" method="POST">
    @csrf
    <div class="mb-3">
      <label class="mb-2 block text-xs font-semibold" for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" value="" class="block w-full rounded-md border border-gray-300 focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 py-1 px-1.5 text-gray-500" />
    </div>

    <div class="mb-3">
      <label class="mb-2 block text-xs font-semibold" for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" value="" class="block w-full rounded-md border border-gray-300 focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 py-1 px-1.5 text-gray-500" />
    </div>

    <div class="mb-3">
      <label class="mb-2 block text-xs font-semibold" for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 py-1 px-1.5 text-gray-500" />
    </div>

    <div class="mb-3">
      <button class="mb-1.5 block w-full text-center text-white bg-yellow-500 hover:bg-yellow-700 px-2 py-1.5 rounded-md">Sign up</button>
    </div>
  </form>
@endsection

@section('footer')
  <span class="text-xs text-gray-400 font-semibold">Do you have account?</span>
  <a href="/login" class="text-xs font-semibold text-yellow-700">Sign in</a>
@endsection