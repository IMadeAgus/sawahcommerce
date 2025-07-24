<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
  
class UserProductController extends Controller
{
    public function show($id): View
    {   
        $product = Product::findOrFail($id);
        return view('productdetail', compact('product'));
    }
}
