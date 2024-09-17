<nav class="sm:fixed sticky  w-full h-20 border-b-2 sm:border-transparent transition-all duration-300 ease-in-out hover:border-b-2 hover:border-white" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <!-- Logo Section - Perusahaan di kiri -->
            <div class="flex-1 flex items-center justify-center sm:items-stretch">
                <div class="flex-shrink-0">
                    {{-- <a href="{{ url('/') }}" class="text-white text-lg font-semibold">Ka'amilah</a> --}}
                </div>
            </div>

            <!-- Mobile Menu Button - Hamburger di kanan -->
            {{-- <div class="absolute inset-y-0 right-0 flex items-center sm:hidden">
                <button @click="open = !open" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed -->
                    <svg class="block h-6 w-6" x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <!-- Icon when menu is open -->
                    <svg class="hidden h-6 w-6" x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div> --}}

            <!-- Menu Section - Menampilkan menu di kanan pada layar besar -->
            {{-- <div class="hidden sm:block sm:ml-6">
                <div class="flex space-x-4">
                    <!-- Desktop Menu Items -->
                    <a href="{{ url('/') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="{{ url('/about') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
                    <a href="{{ url('/contact') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- Mobile Menu, shown when the button is clicked -->
    {{-- <div class="sm:hidden" id="mobile-menu" x-show="open" @click.away="open = false">
        <div class="px-2 pt-2 pb-3 space-y-1 flex flex-col items-end"> <!-- Flex untuk meratakan ke kanan -->
            <a href="{{ url('/') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
            <a href="{{ url('/about') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About</a>
            <a href="{{ url('/contact') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
        </div>
    </div> --}}
</nav>
