<header class="site-header bg-white border-bottom shadow-sm fixed-top" x-data="{ open: false }"
        @click.outside="open = false" style="z-index: 1050;">
    <div class="container d-flex justify-content-between align-items-center py-3"> <!-- Logo --> <a href="#home"
                                                                                                    class="logo fw-bold text-success fs-4 text-decoration-none">
            Adventure Wedding </a> <!-- Desktop Navigation -->
        <nav class="navbar d-none d-md-flex gap-4"><a href="#home" class="text-muted text-decoration-none">Home</a> <a
                href="#products" class="text-muted text-decoration-none">Products</a> <a href="#contact"
                                                                                         class="text-muted text-decoration-none">Contact</a>
        </nav> <!-- ✅ Mobile Menu Toggle -->
        <button type="button" class="d-md-none btn btn-outline-success px-3 py-2" @click.stop="open = !open"
                aria-label="Toggle menu">
            <template x-if="!open"><span>&#9776;</span> <!-- Hamburger --> </template>
            <template x-if="open"><span>&times;</span> <!-- Close --> </template>
        </button>
    </div> <!-- ✅ Mobile Dropdown Menu -->
    <div class="mobile-nav d-md-none" x-show="open" x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2" x-cloak>
        <nav class="container d-flex flex-column py-3 bg-white border-top shadow-sm text-center"><a href="#home"
                                                                                                    class="py-2 text-muted text-decoration-none"
                                                                                                    @click="open = false">Home</a>
            <a href="#products" class="py-2 text-muted text-decoration-none" @click="open = false">Products</a> <a
                href="#contact" class="py-2 text-muted text-decoration-none" @click="open = false">Contact</a></nav>
    </div>
</header>
