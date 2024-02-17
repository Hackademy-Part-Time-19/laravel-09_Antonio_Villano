<?php

namespace App\Http\Controllers;
use App\Http\Requests\ArticleStoreRequest;
use App\Models\Article;

use Illuminate\Http\Request;

class PageController extends Controller
{


    public function __construct(){
        $articles= Article::all();
    }
    
    public function homepage(){
        $categories =[];
        $articles= Article::all();
        foreach($articles as $article){
        $categories[] = $article['category'];
    };
        $titolo='Homepage';
        return view('home',['categories'=>$categories, 'nome_blog'=>$titolo]);

    }
    public function contacts(){

            return view('contatti');

    }
}
