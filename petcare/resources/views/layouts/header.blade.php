<nav class="fixed w-full bg-white shadow-sm z-50">
    <div class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            
            <div class="flex items-center space-x-3">
                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5">
                    </path>
                </svg>
                <span class="text-2xl font-semibold text-gray-900">PetCare</span>
            </div>

            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('frontend-home') }}" class="text-gray-700 hover:text-blue-600 transition">Home</a>
                <a href="{{ route('frontend-services') }}" class="text-gray-700 hover:text-blue-600 transition">Services</a>
                <a href="{{ route('frontend-products') }}" class="text-gray-700 hover:text-blue-600 transition">Products</a>
                <a href="{{ route('frontend-about') }}" class="text-gray-700 hover:text-blue-600 transition">About</a>
                <a href="{{ route('frontend-contact') }}" class="text-gray-700 hover:text-blue-600 transition">Contact</a>

                <!-- Profile Button -->
                <a href="{{route('user-dashboard')}}">
                    <img src="{{ asset('storage/'.Auth::user()->image) }}"
                         class="w-10 h-10 rounded-full object-cover border-2 border-blue-600 hover:opacity-80 transition"
                         alt="Profile">
                </a>
            </div>

        </div>
    </div>
</nav>
