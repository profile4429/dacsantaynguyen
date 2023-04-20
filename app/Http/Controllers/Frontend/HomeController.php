<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use  App\Models\product;
use Illuminate\Support\Facades\Request;

class Homecontroller extends Controller
{
    public function ViewHome()
    {
        $product_desc = product::orderBy('created_at', 'desc') // Sắp xếp giảm dần theo trường created_at
            ->get();
        return view('frontend.home')->with([
            'product_desc' => $product_desc,
        ]);
    }

}
