<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index($category, $product, $price){
        return view('transaction')
            ->with('category', $category)
            ->with('productName', $product)
            ->with('price', $price);
    }
}