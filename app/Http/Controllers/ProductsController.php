<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function viewProducts(){
        $products = [
            ['milk', 1],
            ['chocolate', 5],
            ['vegetables', 2],
            ['coffee', 3],
            ['water', 0.5],
            ['honey', 6],
        ];
        return view('products', ['products' => $products]);
    }
}
