<!DOCTYPE html>
<html lang="en">
<head>
  @include('components.head')
</head>
<body class="w-full container mx-auto bg-yellow-100">
  <!-- Container -->
  <div class="flex flex-wrap min-h-screen w-full content-center justify-center bg-grey-700 py-10">
    
    <!-- Register component -->
    <div class="flex shadow-md">
      <!-- Register form -->
      <div class="flex flex-wrap content-center justify-center rounded-l-md bg-yellow-200" style="width: 24rem; height: 32rem;">
        <div class="w-72">
          <!-- Heading -->
          <h1 class="text-xl font-semibold">Sign up</h1>
          <small class="text-gray-400">Welcome! Please register your details</small>

          @include('components.error')

          <!-- Form -->
          <form class="mt-4" method="POST">
            @csrf
            <div class="mb-3">
              <label class="mb-2 block text-xs font-semibold">Name</label>
              <input type="text" id="name" name="name" placeholder="Enter your name" value="" class="block w-full rounded-md bg-yellow-100 border border-gray-300 focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 py-1 px-1.5 text-gray-500" />
            </div>

            <div class="mb-3">
              <label class="mb-2 block text-xs font-semibold">Email</label>
              <input type="email" id="email" name="email" placeholder="Enter your email" value="" class="block w-full rounded-md bg-yellow-100 border border-gray-300 focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 py-1 px-1.5 text-gray-500" />
            </div>

            <div class="mb-3">
              <label class="mb-2 block text-xs font-semibold">Role (Admin/User)</label>
              <input type="text" id="role" name="role" placeholder="Enter your role" value="" class="block w-full rounded-md bg-yellow-100 border border-gray-300 focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 py-1 px-1.5 text-gray-500" />
            </div>

            <div class="mb-3">
              <label class="mb-2 block text-xs font-semibold">Password</label>
              <input type="password" id="password" name="password" placeholder="*****" class="block w-full rounded-md bg-yellow-100 border border-gray-300 focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 py-1 px-1.5 text-gray-500" />
            </div>

            <div class="mb-3">
              <button class="mb-1.5 block w-full text-center text-white bg-yellow-500 hover:bg-yellow-700 px-2 py-1.5 rounded-md">Sign up</button>
            </div>
          </form>

          <!-- Footer -->
          <div class="text-center">
            <span class="text-xs text-gray-400 font-semibold">Do you have account?</span>
            <a href="/login" class="text-xs font-semibold text-yellow-700">Sign in</a>
          </div>
        </div>
      </div>

      <!-- Register banner -->
      @include('components.banner')

    </div>
  </div>
</body>
</html>