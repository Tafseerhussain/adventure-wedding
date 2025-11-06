<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $json = file_get_contents(resource_path('data/products.json'));
        $products = json_decode($json, true);


        return view('products.index', compact('products'));
    }
}
