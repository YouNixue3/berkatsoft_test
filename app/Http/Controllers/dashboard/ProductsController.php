<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\dashboard\data\ProductsController as DataController;

class ProductsController extends Controller
{
    public function __construct(DataController $data)
    {
        $this->data = $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->data->get_data();
        $data = compact('products');
        return view('products', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($this->data->store_data($request)) {
            return redirect()->route('products')->with('success', 'sukses');
        }
        return redirect()->back()->with('error', 'gagal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = $this->data->get_edit_data($id);

        $data = compact('products');

        return view('products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($this->data->update_data($request, $id)) {
            return redirect()->route('products')->with('success', 'sukses');
        }
        return redirect()->back()->with('error', 'gagal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if ($this->data->destroy_data($request)) {
            return redirect()->route('products')->with('success', 'sukses');
        }
        return redirect()->back()->with('error', 'gagal');
    }
}
