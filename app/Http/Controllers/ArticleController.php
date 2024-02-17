<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleStoreRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{

    public function __construct(){
        $articles= Article::all();

    }
    public function index() {
        $titolo='Articoli';
        $articles= Article::all();
        return view('articoli',compact('titolo'),['articoli'=>$articles]);
    }
    public function show($id=0) {
        $article = Article::find($id);

        return view('articolo',['articolo'=>$article]);
    }
    public function byCategory($category){
        $articlesByCategory=Article::where('category',$category)->get();

        return view('articoli-bycategory', ['articoli'=>$articlesByCategory]);

    }
    public function store(ArticleStoreRequest $request){
        $validated=$request->validated();

        $article = Article::create($validated);
        if ($request->hasFile('image')) {
            $path = 'images';
            $name= $article['id'].$request->file('image')->getClientOriginalName();
            $file = $request->file('image')->storeAs($path,$name);
            $image =$path.'/'.$name;
            $article->image=$image;
            $article->save();
        }

        return redirect()->back()->with(['success'=>'Articolo inserito con successo']);
    }
    public function create(){
        return view('create-article');
    }
}
