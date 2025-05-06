<nav class="bg-gradient-to-r from-yellow-400 via-yellow-300 to-orange-200 text-yellow-900 px-6 py-4 shadow-md flex justify-between items-center sticky top-0 z-50 rounded-b-2xl border-b border-yellow-500">
    <div class="flex space-x-6 font-semibold items-center">
        <a href="/dashboard" class="flex items-center gap-1 hover:text-white transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6M5 10v10h14V10" />
            </svg>
            Dashboard
        </a>

        <a href="{{ route('pengelolaan') }}" class="flex items-center gap-1 hover:text-white transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
            </svg>
            Pengelolaan
        </a>
    </div>

    <div class="flex items-center space-x-3">
        <span class="text-sm font-medium">Halo, {{ $username }}!</span>
        
        <a href="/profile" class="hover:opacity-90 transition">
            <img src="https://ui-avatars.com/api/?name={{ $username }}&background=FFCB05&color=000" alt="Profile" class="h-10 w-10 rounded-full border-2 border-yellow-600 shadow-sm">
        </a>
    </div>
</nav>
