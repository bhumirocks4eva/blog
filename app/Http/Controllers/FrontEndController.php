<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Category;
use App\Post;
use App\Tag;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function index()
    {
    	return view('index')
    				->with('settings', Setting::first())
    				->with('categories',Category::take(4)->get())
    				->with('first_post', Post::orderBy('created_at','desc')->first())
    				->with('second_post', Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
    				->with('third_post', Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first());
    }

    public function singlePost($slug)
    {
    	$post= Post::where('slug',$slug)->first();

    	$next_id= Post::where('id', '>', $post->id)->min('id');
    	$pre_id = Post::where('id', '<', $post->id)->max('id');

    	return view('single')->with('post', $post)
    						 ->with('settings', Setting::first())
    						 ->with('categories',Category::take(4)->get())
    						 ->with('next', Post::find($next_id))
    						 ->with('previous', Post::find($pre_id))
    						 ->with('tags',Tag::all());
    }

    public function category($id)
    {
    	$category = Category::find($id);

    	return view('category')->with('category', $category)
    						   ->with('settings', Setting::first())
                               ->with('tags',Tag::all())
    						   ->with('categories',Category::take(4)->get());
    }

    public function tag($id)
    {
        $tag = Tag::find($id);

        return view('tag')->with('tag', $tag)
                               ->with('settings', Setting::first())
                               ->with('tags',Tag::all())
                               ->with('categories',Category::take(4)->get());
    }
}
