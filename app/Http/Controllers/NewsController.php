<?php

namespace App\Http\Controllers;

use App\article;
use App\category;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function showNews(){
        return view("news");
    }

    public function showGallery(){
        return view("gallery");
    }

    public function showCategory(){
        return view("category");
    }

    public function showArticle(){
        return view("article");
    }


    public function SendTitle(Request $request){
        $post_data = $request->all();
        category::create($post_data);
        return redirect()->back();
    }

    public function SaveArticle(Request $request){
        $post_data = $request->all();
        article::create($post_data);
        return redirect()->back();
    }
}
