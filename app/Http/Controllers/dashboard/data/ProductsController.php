<?php

namespace App\Http\Controllers\dashboard\data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductsController extends Controller
{
    public function get_data()
    {
        $data = Product::paginate(5);
        return $data;
    }
    public function get_edit_data($id)
    {
        $data = Product::findOrFail($id);
        return $data;
    }

    public function store_data(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->desc = $request->desc;

        return $product->save();
    }

    public function update_data(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->desc = $request->desc;

        return $product->save();
    }

    public function destroy_data($request)
    {
        $product = Product::findOrFail($request->id)->delete();
        return $product;
    }
}
