<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>[x-cloak] {
            display: none !important;
        }</style> @viteReactRefresh @vite(['resources/js/app.jsx', 'resources/js/app.js', 'resources/scss/app.scss'])
    <title>Adventure Wedding</title></head>
<body class="bg-[#f9fafb] text-gray-800">

<!-- ✅ HEADER -->
<x-header/>
<main class="container-fluid" style="margin-top: 90px;">



    <x-home-section/>

    <!-- 🛍️ PRODUCTS SECTION -->
    <section id="products" class="bg-white">
        <div class="container"><h2 class="text-center mb-5 fw-bold">Our Products</h2>
            <div class="row g-4"> @foreach($products as $product)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <x-product-card :product="$product"/>
                    </div>
                @endforeach </div>
        </div>
    </section>
    <x-contact-section/>
</main>
<x-footer/>

<!-- ✅ Bootstrap Modal controlled by Alpine -->
<div
    x-data="modalBridge"
    x-init="init()"
    x-cloak
>
    <div
        class="modal fade"
        id="productModal"
        tabindex="-1"
        aria-labelledby="productModalLabel"
        aria-hidden="true"
        x-ref="modalEl"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="productModalLabel" x-text="product?.title"></h5>
                    <button type="button" class="btn-close" @click="closeModal()" aria-label="Close"></button>
                </div>
                <div class="modal-body" x-show="product">
                    <img :src="product?.image" class="img-fluid rounded mb-3" :alt="product?.title">
                    <p x-text="product?.desc"></p>
                    <div class="text-success fw-bold fs-5 mt-2" x-text="product?.price"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Highlight active nav link when scrolling
        const sections = document.querySelectorAll("section[id]");
        const navLinks = document.querySelectorAll("nav a");

        function updateActiveLink() {
            let scrollPos = window.scrollY + 150;
            sections.forEach(sec => {
                if (scrollPos >= sec.offsetTop && scrollPos < sec.offsetTop + sec.offsetHeight) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === `#${sec.id}`) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }

        window.addEventListener('scroll', updateActiveLink);
        updateActiveLink();
    });
</script>

<!-- ✅ Alpine + Bootstrap modal bridge -->
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('modalBridge', () => ({
            product: null,
            bsModal: null,

            init() {
                // Ensure Bootstrap exists
                if (!window.bootstrap) {
                    console.error('❌ Bootstrap JS not found. Check app.js import.');
                    return;
                }

                // Get modal element & create Bootstrap instance
                this.bsModal = new bootstrap.Modal(this.$refs.modalEl);

                // Listen for product open event
                window.addEventListener('open-product', (e) => {
                    this.product = e.detail;
                    this.bsModal.show();
                });

                // Reset on modal hide
                this.$refs.modalEl.addEventListener('hidden.bs.modal', () => {
                    this.product = null;
                });
            },

            closeModal() {
                if (this.bsModal) this.bsModal.hide();
            }
        }));
    });
</script>

</body>
</html>
