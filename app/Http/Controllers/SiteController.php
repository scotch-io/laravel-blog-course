<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Post;
use Illuminate\Http\Request;

class SiteController extends Controller {
    
    public function showHome() {
        $posts = Post::all(); 
        return view('home', compact('posts'));
    }

    public function showPost($slug) {
        $post = Post::findBySlug($slug);
        dd($post);
    }

    public function showContact() {

    }

    public function processContact(Request $request) {

    }

}
