<div class="w-full container mx-auto bg-yellow-400">
    <div class="w-full flex items-center justify-between">
        <div class="flex items-center">
            <a class="flex items-center text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl ml-4"
                href="#">
                <x-application-logo class="block h-8 pr-2 w-auto fill-current" />
                <span class="font-semibold text-lg md:text-xl">PurrfectAdopt</span>
            </a>
        </div>
        <div class="flex items-center space-x-4 px-6">
            <a href="#"
                class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-105 duration-300 ease-in-out">
                Home
            </a>
            <a href="{{ route('article') }}"
                class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-105 duration-300 ease-in-out">
                Article
            </a>
            <a href="#"
                class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-105 duration-300 ease-in-out">
                My Pet
            </a>
            <div class="relative ml-auto mr-5">
                <a href="#"
                    class="inline-block text-yellow-400 bg-white no-underline text-center h-10 w-10 rounded-full flex items-center justify-center transform hover:scale-105 duration-300 ease-in-out">
                    <i class="fa-solid fa-user"></i>
                </a>
            </div>
        </div>
    </div>
</div>