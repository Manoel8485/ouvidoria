<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('welcome');
    }
    public function store(Request $request){
        Post::create($request->all());
        return view('welcome');
    }
    public function index(){
        $requisicao = Post::all();
        return view('welcome',compact('requisicao'));
    }
}
