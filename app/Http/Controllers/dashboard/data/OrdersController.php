<?php

namespace App\Http\Controllers\dashboard\data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class OrdersController extends Controller
{
    public function get_data()
    {
        $data = Order::paginate(5);
        return $data;
    }

    public function get_costumer()
    {
        $data = User::where('level', 'costumer')->get();
        return $data;
    }

    public function get_product()
    {
        $data = Product::get();
        return $data;
    }

    public function get_edit_data($id)
    {
        $data = Order::findOrFail($id);
        return $data;
    }

    public function store_data(Request $request)
    {
        $order = new Order();
        $order->user_id = $request->user_id;
        $order->product_id = $request->product_id;

        return $order->save();
    }

    public function update_data(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->user_id = $request->user_id;
        $order->product_id = $request->product_id;

        return $order->save();
    }

    public function destroy_data($request)
    {
        $order = Order::findOrFail($request->id)->delete();
        return $order;
    }
}
