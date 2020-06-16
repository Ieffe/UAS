<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class ArticleController extends Controller
{

    //CRUD Control

    public function index(){
        $articles = Article::paginate(15);

        return view('crud.crud', ['articles' => $articles]);
    }

    public function add(){
        return view('crud.add');
    }

    public function post(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'slug' => $request->slug,
            'tag' => $request->tag
        ]);

        return redirect('/crud/articles');

    }

    public function edit($id){

        $articles = Article::find($id);
        return view('crud.edit', ['articles' => $articles]);
    }

    public function update($id, Request $request){
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
        ]);

        $articles = Article::find($id);
        $articles ->title = $request ->title;
        $articles ->body = $request ->body;
        $articles ->tag = $request ->tag;
        $articles ->save();

        return redirect('/crud/articles');
    }

    public function remove($id){
        $articles = Article::find($id);
        $articles->delete();
        
        return redirect('/crud/articles');
    }



}
