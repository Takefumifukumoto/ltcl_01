<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; //Postモデルをインポート

class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(5)]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }
}
