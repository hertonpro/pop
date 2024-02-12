<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $last = Article::latest()->first();
        $last_2 = Article::latest()->skip(1)->limit(2)->get();
        $last_3 = Article::latest()->skip(3)->limit(3)->get();
        $Journal = Article::where('categorie_id', 9)->latest()->first();
        $RI = Article::where('tags', 'like', '%reportage%')
             ->orWhere('tags', 'like', '%interview%')
             ->latest()
             ->limit(4)
             ->get();
             $articles = Article::latest()->limit(2)->get();
             $categories = Categorie::latest()->limit(5)->get();

        return view('pages.home', ['last' => $last, 'last_2' => $last_2, 'last_3' => $last_3, 'Journal' => $Journal, 'RI' => $RI, 'categories'=>$categories, 'articles'=>$articles]);
    }
}
