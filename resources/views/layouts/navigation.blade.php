<header class="bg-persian-green-600 py-4">
    <div class="container mx-auto px-4">
        <nav class="flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-white">Self Eval</a>
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-white hover:text-charcoal-200 transition">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-white hover:text-charcoal-200 transition mr-4">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-white hover:text-charcoal-200 transition">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
    </div>
</header>