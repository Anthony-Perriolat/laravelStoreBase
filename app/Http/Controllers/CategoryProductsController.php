<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use App\Models\CategoryProducts;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryProducts = CategoryProducts::all();
        return view('categoryProducts', ['categoryProducts'=> $categoryProducts]);
    }

//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        //
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCategoryProduct = new CategoryProducts();
        $newCategoryProduct->name = $request['name'];
        $newCategoryProduct->type = $request['type'];
        return $newCategoryProduct;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryProducts $categoryProduct)
    {
        $Products = $categoryProduct->Product;
        return view('Products', ['categoryProduct' => $categoryProduct, 'Products' => $Products]);
    }

//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryProducts $categoryProduct)
    {
        $categoryProduct['name'] = $request->name;
        $categoryProduct['type'] = $request->type;
        $categoryProduct->updateOrFail();
        return $categoryProduct;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryProducts $categoryProduct)
    {
        return $categoryProduct->deleteOrFail();
    }

    public function aCategoryReturnAllProducts()
    {
        return CategoryProducts::with('Product')->get();
    }
}
