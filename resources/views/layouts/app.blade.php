<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Adventure Wedding Product Showcase">
    <title>Adventure Wedding — Showcase</title>
    @vite(['resources/js/app.jsx', 'resources/scss/app.scss'])
</head>
<body class="font-sans bg-gray-50">


<div x-data="{mobileOpen:false}" class="min-h-screen flex flex-col">
    <header class="site-header p-4 bg-white shadow-sm">
        <div class="container mx-auto flex items-center justify-between">
            <a href="/" class="logo text-xl font-bold">Adventure Wedding</a>


            <nav class="hidden md:flex gap-6 items-center">
                <a href="#" class="navlink">Home</a>
                <a href="#" class="navlink">Products</a>
                <a href="#" class="navlink">Contact</a>
            </nav>


            <button @click="mobileOpen = !mobileOpen" class="md:hidden p-2 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>


        <div x-show="mobileOpen" x-cloak class="md:hidden bg-white border-t">
            <div class="p-4 flex flex-col gap-3">
                <a href="#">Home</a>
                <a href="#">Products</a>
                <a href="#">Contact</a>
            </div>
        </div>
    </header>


    <main class="flex-1 container mx-auto p-4">
        @yield('content')
    </main>


    <footer class="bg-white border-t p-6">
        <div class="container mx-auto text-center">
            <div class="mb-3">Follow us</div>
            <div class="flex gap-4 justify-center">
                <a aria-label="facebook" href="#">FB</a>
                <a aria-label="instagram" href="#">IG</a>
                <a aria-label="twitter" href="#">TW</a>
            </div>
            <div class="mt-4 text-sm text-gray-500">© {{ date('Y') }} Adventure Wedding</div>
        </div>
    </footer>
</div>


</body>
</html>
