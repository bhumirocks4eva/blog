<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard')
                                      ->with('post_count', Post::all()->count())
                                      ->with('trashed_count',Post::onlyTrashed()->get()->count())
                                      ->with('users_count', User::all()->count())
                                      ->with('categories_count', Category::all()->count());
    }
}
