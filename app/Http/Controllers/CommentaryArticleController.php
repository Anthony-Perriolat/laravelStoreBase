<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CommentaryArticle;
use Illuminate\Http\Request;

class CommentaryArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CommentaryArticle::all();
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
        $newCommentaryArticle = new CommentaryArticle();
        $newCommentaryArticle->content_commentary = $request['content_commentary'];
        $newCommentaryArticle->article_id = $request['id_foreignkey'];
        $newCommentaryArticle->saveOrFail();
        return redirect()->route('article.show', $newCommentaryArticle->article_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CommentaryArticle $commentaryArticle)
    {
        return $commentaryArticle;
    }

//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommentaryArticle $commentaryArticle)
    {
        $CommentaryArticle['content_commentary'] = $request->content_commentary;
        $CommentaryArticle['article_id'] = $request->article_id;
        $CommentaryArticle->updateOrFail();
        return $CommentaryArticle;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentaryArticle $commentaryArticle)
    {
        return $commentaryArticle->deleteOrFail();
    }
}
