@props(['product'])

<div x-data class="product-card bg-white border rounded-3 shadow-sm overflow-hidden">
    <img class="w-100" src="{{ $product['image'] }}" alt="{{ $product['title'] }}">

    <div class="p-3">
        <h5 class="fw-bold">{{ $product['title'] }}</h5>
        <p class="text-muted small mb-2">{{ $product['short'] }}</p>

        <div class="d-flex justify-content-between align-items-center">
            <span class="text-success fw-bold">{{ $product['price'] }}</span>

            <!-- ✅ React LikeButton mount point -->
            <div class="like-root" data-id="{{ $product['id'] }}"></div>
        </div>

        <button
            type="button"
            class="btn btn-outline-secondary btn-sm mt-3 w-100"
            @click="
                console.log('🟢 Clicked:', {{ json_encode($product['title']) }});
                window.dispatchEvent(new CustomEvent('open-product', { detail: {{ json_encode($product) }} }));
            "
        >
            View Details
        </button>
    </div>
</div>
