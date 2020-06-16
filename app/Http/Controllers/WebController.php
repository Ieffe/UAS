<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class WebController extends Controller
{
        //Web Articles
        public function article($id){
            $articles = Article::find($id);
            return view('page-template.article', ['articles' => $articles]);
        }//single articles

        public function main(){
            $articles = Article::paginate(15);

            return view('main', ['articles' => $articles]);
        }//main page

        public function search(Request $request){
            $search = $request->search; //search data
            $articles = Article::where('title','like','%{$search$}')->get();

            return view('main', ['articles' => $articles]);
        }
    
        
}
