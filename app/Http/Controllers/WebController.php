<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class WebController extends Controller
{
        //sidebar
        public function sidebar(){

        }

        //Web Articles
        public function article($id){
            $articles = Article::find($id);
            $articles = Article::all();
            return view('page-template.article', ['articles' => $articles]);
            return view('includes.sidebar', ['sidebar' => $articles]);

        }//single articles

        public function home($id, Request $request){
            $articles = Article::all();

            return view('home', ['articles' => $articles]);
        }
}
