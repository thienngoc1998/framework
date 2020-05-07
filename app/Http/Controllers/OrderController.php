<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('backend.order')->withOrders(Order::orderBy('id','desc')->paginate(5));
    }

    public function destroy($id)
    {
        Order::find($id)->delete();
        return redirect()->route('order')->withFlashSuccess(__('alert.deleted'));
    }
}
