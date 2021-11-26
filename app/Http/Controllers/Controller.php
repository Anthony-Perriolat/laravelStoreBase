<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CategoryAnnouncement;
use App\Models\CategoryArticles;
use App\Models\ServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // here we have main page multi-routing

    public function home()
    {
        $categoryArticles = CategoryArticles::all();
        $categoryAnnouncement = CategoryAnnouncement::all();
        $allProfile = User::with('ServiceProvider')->get();
        return view('home', ['categoryArticles' => $categoryArticles, 'categoryAnnouncement' => $categoryAnnouncement, 'allProfile' => $allProfile]);
    }
}
