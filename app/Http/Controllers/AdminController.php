<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Blog;
use App\User;
use App\Category;
use App\Carousel;

class AdminController extends Controller
{
	public function __construct(){
		$this->middleware(['auth','admin'],['only'=>'blogs']);
        $this->middleware('auth');
	}

    public function index(){
        $blogs = Blog::all();
        $publishedBlogs = Blog::where('status' , 1)->latest()->get();
        $draftBlogs = Blog::where('status' , 0)->latest()->get();

        $user = User::all();
        $admins = User::where('role_id' , 1)->latest()->get();
        $authors = User::where('role_id' , 2)->latest()->get();
        $subscribers = User::where('role_id' , 3)->latest()->get();

        $category = Category::all();
        $carousel = Carousel::all();

    	return view('admin.dashboard',
            compact('blogs',
                    'publishedBlogs',
                    'draftBlogs',
                    'user',
                    'admins',
                    'authors',
                    'subscribers',
                    'category',
                    'carousel'
        ));
    }

    public function blogs(){
    	$publishedBlogs = Blog::where('status' , 1)->latest()->get();
    	$draftBlogs = Blog::where('status' , 0)->latest()->get();
    	return view('admin.blogs' , compact('publishedBlogs', 'draftBlogs'));
    }

}
