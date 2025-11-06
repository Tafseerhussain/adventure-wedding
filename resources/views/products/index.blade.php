@extends('layouts.app')


@section('content')
    <header class="mb-6">
        <h1 class="text-3xl font-bold">Products</h1>
        <p class="text-gray-600 mt-1">Handpicked wedding items for your Adventure Wedding.</p>
    </header>


    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($products as $product)
            <x-product-card :product="$product" />
        @endforeach
    </section>
@endsection
