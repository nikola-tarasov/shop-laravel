<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ShowController extends Controller
{
    public  function show($cat, $product)
    {
        $items = Product::where('title', $product)->first();

        return view('product.show', [

            'item'=>$items,

        ]);

    }

    public function showCategory($alias_title)
    {
        $cat = Category::where('alias', $alias_title)->first();



        return view('categories.index', [
            'cat'=> $cat,
        ]);
    }
}
