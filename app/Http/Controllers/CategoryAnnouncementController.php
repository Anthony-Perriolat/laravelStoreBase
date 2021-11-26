<?php

namespace App\Http\Controllers;

use App\Models\CategoryAnnouncement;
use Illuminate\Http\Request;

class CategoryAnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryAnnouncement = CategoryAnnouncement::all();
        return view('categoryAnnouncement', ['categoryAnnouncement'=> $categoryAnnouncement]);
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
        $newCategoryAnnouncement = new CategoryAnnouncement();
        $newCategoryAnnouncement->name = $request['name'];
        $newCategoryAnnouncement->type = $request['type'];
        return $newCategoryAnnouncement;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryAnnouncement $categoryAnnouncement)
    {
        $announcements = $categoryAnnouncement->announcement;
        return view('announcements', ['categoryAnnouncement' => $categoryAnnouncement, 'announcements' => $announcements]);
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
    public function update(Request $request, CategoryAnnouncement $categoryAnnouncement)
    {
        $categoryAnnouncement['name'] = $request->name;
        $categoryAnnouncement['type'] = $request->type;
        $categoryAnnouncement->updateOrFail();
        return $categoryAnnouncement;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryAnnouncement $categoryAnnouncement)
    {
        return $categoryAnnouncement->deleteOrFail();
    }
}
