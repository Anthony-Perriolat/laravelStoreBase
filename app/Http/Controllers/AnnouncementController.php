<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcement::all();
        return view('announcements', ['announcements'=> $announcements]);
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
        $newAnnonucement = new Announcement();
        $newAnnonucement->title = $request['title'];
        $newAnnonucement->description = $request['description'];
        $newAnnonucement->provide = $request['provide'];
        $newAnnonucement->price = $request['price'];
        $newAnnonucement->category_announcement_id = $request['category_announcement_id'];

        $newAnnonucement->saveOrFail();
        return $newAnnonucement;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        return view('announcement', ['announcement' => $announcement]);

    }

//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Request $request, )
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
    public function update(Request $request, Announcement $announcement)
    {
        $announcement->title = $request['title'];
        $announcement->description = $request['description'];
        $announcement->provide = $request['provide'];
        $announcement->price = $request['price'];
        $announcement->category_announcement_id = $request['category_announcement_id'];

        $announcement->updateOrFail();
        return $announcement;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        return $announcement->deleteOrFail();
    }
}
