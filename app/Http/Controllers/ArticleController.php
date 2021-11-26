<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CommentaryArticle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Article = Article::all();
        return view('articles', ['articles'=> $Article]);

    }

//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newArticle = new Article();
        $newArticle['title'] = $request->title;
        $newArticle['content_article'] = $request->content_article;
        $newArticle['category_articles_id'] = $request->category_articles_id;
        $newArticle->saveOrFail();
        return $newArticle;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $commentary = $article->commentaryArticle;
        return view('pageArticle', ['article'=> $article, 'commentary' => $commentary]);

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
    public function update(Request $request, $id)
    {
        $newArticle = new Article();
        $newArticle->title = $request['title'];
        $newArticle->content_article = $request['content_article'];
        $newArticle->category_articles_id = $request['category_articles_id'];
        $newArticle->updateOrFail();
        return $newArticle;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        return $article->deleteOrFail();
    }
}
