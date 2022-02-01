<?php

namespace App\Http\Controllers\Api;
use App\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $listaPost = Post::with('category')->get();
        return response()->json($listaPost);
    }

    
    public function show($id){
        $post = Post::where('id', $id)->first();
        return response()->json($post);
    }
}
