<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{
    public function ViewProduct()
    {
        $product = product::paginate(10);
        return view('backend.viewproduct', [
            'products' => $product,
        ]);
    }
    public function AddProduct(Request $request)
    {
        $params = $request->all();
        unset($params['_token']);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = $image->move('images', $filename);
            $params['image'] = $filename;
        }
        product::insert($params);
        return redirect()->route('ViewProduct');
    }
    public function UpdateProduct(Request $request)
    {
        $id = $request->id;
        $params = $request->all();
        unset($params['_token']);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = $image->move('images', $filename);
            $params['image'] = $filename;
        }
        product::where('id', $id)->update($params);
        return redirect()->route('ViewProduct');
    }
 
    public function GetProductID(Request $request)
    {
        $product_id = $request->product_id;
        $product = Product::find($product_id);
        if ($product) {
            return response()->json($product);
        } else {
            return response()->json(['error' => 'Product not found'], 404);
        }
    }
    
    public function DeleteProduct(Request $request)
    {
        try {
            $id = $request->id;
            product::where('id', $id)->delete();
            $json = [
                'error' => 0,
                'messe' => "thanh cong"
            ];
        } catch (\Exception $e) {
            $json = [
                'error' => 1,
                'messe' => $e->getMessage()
            ];
        }
        return response()->json($json);
    }
}
