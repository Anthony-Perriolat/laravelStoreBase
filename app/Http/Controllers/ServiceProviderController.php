<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ServiceProvider::all();
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
        $newServiceProvider = new ServiceProvider();
        $newServiceProvider->name = $request['name'];
        $newServiceProvider->content_experience = $request['content_experience'];
        $newServiceProvider->date_experience = $request['date_experience'];
        $newServiceProvider->service_provider_id = $request['service_provider_id'];
        $newServiceProvider->saveOrFail();
        return $newServiceProvider;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $serviceProvider)
    {
        $profile = $serviceProvider->load('ServiceProvider');
        return view('profileServiceProviders', ['profile' => $profile]);
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
    public function update(Request $request, ServiceProvider $serviceProvider)
    {
        $newServiceProvider = new ServiceProvider();
        $newServiceProvider->name = $request['name'];
        $newServiceProvider->content_experience = $request['content_experience'];
        $newServiceProvider->date_experience = $request['date_experience'];
        $newServiceProvider->service_provider_id = $request['service_provider_id'];
        $newServiceProvider->updateOrFail();
        return $newServiceProvider;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceProvider $serviceProvider)
    {
        return $serviceProvider->deleteOrFail();
    }
}
