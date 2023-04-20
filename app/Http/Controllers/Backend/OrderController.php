<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;

class OrderController extends Controller
{
    public function ViewOrder()
    {
        $order= order::all();
        
        return view('backend.vieworder',[
            'order'=>$order
        ]);
    }
    public function ChangeStatus(Request $request)
    {
        $order_id = $request->id;
        $type = $request->type;

        $check = order::where('id', $order_id)->first();
        if (!$check) redirect()->back();


        $updated =  $check->update(['status' => $type == 'accept' ? 2 : ($type == 'cancel' ? 0 : ($type == 'success' ? 3 : 1))]);

        if ($updated) {
            $order= order::all();
            return view('backend.vieworder',[
                'order'=>$order
            ]);
        } else {
            return redirect()->back();
        }
    }
}
