<?php

namespace App\Http\Controllers;

use App\Models\CategoryProducts;
use Illuminate\Http\Request;

class CategoryArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CategoryArticles = CategoryProducts::all();
        return view('categoryArticles', ['categoryArticles' => $CategoryArticles]);

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
        $newCategoryArticles = new CategoryProducts();
        $newCategoryArticles->name = $request['name'];
        $newCategoryArticles->type = $request['type'];
        return $newCategoryArticles->saveOrFail();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryProducts $categoryArticles)
    {

        return view('articles', ['articles' => $categoryArticles]);
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
    public function update(Request $request, CategoryProducts $categoryArticles)
    {
        $categoryArticles->name = $request['name'];
        $categoryArticles->type = $request['type'];
        return $categoryArticles->updateOrFail();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryProducts $categoryArticles)
    {
        return $categoryArticles->deleteOrFail();
    }
}
