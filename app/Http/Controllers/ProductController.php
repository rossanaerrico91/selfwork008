<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    private string $endpoint = 'https://fakestoreapi.com/products';
   
    public function index()
    {
        $products = Http::get($this->endpoint)->json();
        
        return view('products.index', compact('products'));
    }

    public function show(int $product_id)
    {
        
        $product = Http::withUrlParameters([
            'endpoint' => $this->endpoint,
            'product_id' => $product_id,
        ])->get('{+endpoint}/{product_id}')->json();

        return view('products.show', compact('product'));
    }
}
