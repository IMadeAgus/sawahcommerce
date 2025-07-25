<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
        @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
    <div
        class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-6 items-center">

            <div class="space-y-5">
                <span class="inline-block bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">v5.0</span>
                <a href="#" class="text-indigo-600 text-sm font-medium block">Build your idea</a>
                <h1 class="text-3xl md:text-4xl font-bold leading-tight">
                    Unlock your full potential and build amazing web projects
                </h1>
                <p class="text-gray-600">
                    A complete suite for all your web development needs. Empower your journey with our all-in-one
                    toolkit.
                </p>
                <div class="flex gap-4">
                    <a href="#"
                        class="bg-indigo-600 text-white px-5 py-2 rounded-lg font-medium text-sm hover:bg-indigo-700">Start
                        for free</a>
                    <a href="#"
                        class="px-5 py-2 text-sm font-medium text-gray-700 border rounded-lg hover:bg-gray-100">Learn
                        more</a>
                </div>
                <div class="flex items-center space-x-2 pt-4">
                    <div class="flex -space-x-2">
                        <img src="https://i.pravatar.cc/30?img=1" class="w-6 h-6 rounded-full border-2 border-white" />
                        <img src="https://i.pravatar.cc/30?img=2" class="w-6 h-6 rounded-full border-2 border-white" />
                        <img src="https://i.pravatar.cc/30?img=3" class="w-6 h-6 rounded-full border-2 border-white" />
                    </div>
                    <div class="text-sm text-gray-500">
                        <strong class="text-black">5.0</strong> – Join 5,000+ founders
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2 bg-yellow-100 p-4 rounded-xl shadow">
                    <h4 class="font-semibold text-gray-800 mb-1">Optimized SEO</h4>
                    <p class="text-sm text-gray-600 mb-3">
                        Elevate your online presence with our tailored packages and dominate search engine rankings
                        effortlessly.
                    </p>
                    <a href="#" class="text-sm font-medium text-yellow-700 underline">View packages</a>
                </div>

                <div class="bg-green-100 p-4 rounded-xl flex flex-col justify-center text-center">
                    <h3 class="text-2xl font-bold text-green-700">7k</h3>
                    <p class="text-sm text-gray-700">users</p>
                </div>

                <div class="bg-red-100 p-4 rounded-xl flex flex-col justify-center text-center">
                    <h3 class="text-2xl font-bold text-red-600">5x</h3>
                    <p class="text-sm text-gray-700">faster</p>
                </div>

                <div class="bg-indigo-100 p-4 rounded-xl flex flex-col justify-center text-center">
                    <h3 class="text-2xl font-bold text-indigo-600">3k</h3>
                    <p class="text-sm text-gray-700">projects</p>
                </div>

                <div class="bg-lime-100 p-4 rounded-xl">
                    <h4 class="font-semibold text-lime-800">Security Features</h4>
                    <p class="text-sm text-gray-600 mb-1">Protect your websites.</p>
                    <span class="text-xs bg-lime-200 px-2 py-1 rounded-full">🛡️ DDoS attack resolved!</span>
                </div>

            </div>
        </div>
    </div>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
</body>

</html>
