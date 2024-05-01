<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dataproducts['products'] = Products::paginate(15);
        return view('menu/storages/products', $dataproducts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('menu/storages/create_products');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer|max:20',
            'name_product' => 'required|string|max:100',
            'type_product' => 'required|string|max:100',
            'unit_price' => 'required|string|max:100',
            'sale_price' => 'required|string|max:100',
            'stock_product' => 'required|string|max:100',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $dataproduct = request()->except('_token');
        Products::insert($dataproduct); //Insert product data except token
        return redirect('products')->with('mensaje', 'Producto agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($product_id)
    {
        //
        $products = products::findOrFail($product_id);
        return view('menu/storages/edit_products', compact('products'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $product_id)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer|max:20',
            'name_product' => 'required|string|max:100',
            'type_product' => 'required|string|max:100',
            'unit_price' => 'required|string|max:100',
            'sale_price' => 'required|string|max:100',
            'stock_product' => 'required|string|max:100',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        //We search and update product data
        $dataproduct = request()->except(['_token', '_method']);
        products::where('id','=',$product_id)->update($dataproduct);
        $products = products::findOrFail($product_id);
        return redirect('products')->with('mensaje', 'Producto modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product_id)
    {
        //
        products::destroy($product_id);
        return redirect('products')->with('mensaje','Producto borrado');
    }
}
