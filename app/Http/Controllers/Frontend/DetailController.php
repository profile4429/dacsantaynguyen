<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\product;

class DetailController extends Controller
{
    public function ViewDetail(Request $request)
    {
        $product_desc = product::orderBy('created_at', 'desc') // Sắp xếp giảm dần theo trường created_at
        ->get();
        $products = product::where('id', $request->id)->get();
        return view('frontend.detail', [
            'products' => $products,
            'product_desc' => $product_desc
        ]);
    }
}
