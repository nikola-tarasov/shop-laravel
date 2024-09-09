<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShowController extends Controller
{
    public  function show($cat, $product_id)
    {
        $items = Product::where('id', $product_id)->first();

        return view('product.show', [

            'item'=>$items,

        ]);

    }

    public function showCategory()
    {

    }
}
