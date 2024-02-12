<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ArticleController extends Controller
{
    
    public function index()
    {
        $articles = Article::all();
        $categories = Categorie::all();
        $selected_article=null;

        return view('pages.admin.article', ['articles' => $articles, 'categories' =>$categories, 'selected_article' => $selected_article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $photo=storage::disk('public')->put('articles', $request->image);
        $article = new Article([
            'titre' => $request->get('titre'),
            'contenu' => $request->get('contenu'),
            'resume' => $request->get('resume'),
            'auteur_id' => $request->get('auteur_id'),
            'date_publication' => date('Y-m-d H:i'),
            'categorie_id' => $request->get('categorie_id'),
            'tags' => $request->get('tags'),
            'image' => $photo,
            'video_link' => $request->get('video_link'),
            'statut' => $request->get('statut'),
        ]);

        $article->save();

        return redirect('admin/articles')->with('success', 'Article has been added');
    }

    public function show($id)
    {
        $article = Article::find($id);
        $lastArticles = Article::latest()->limit(4)->get();
        $Journal = Article::where('categorie_id', 9)->latest()->first();
        
        $categories = Categorie::latest()->limit(5)->get();

        return view('pages.article.show', ['article' => $article,'Journal' => $Journal,'lastArticles' => $lastArticles,'categories' => $categories]);
    }

    public function edit($id)
    {
        $selected_article = Article::find($id);
        $articles = Article::all();
        $categories = Categorie::all();

        return view('pages.admin.article', ['articles' => $articles, 'categories' =>$categories, 'selected_article' => $selected_article]);
    }

    public function update(Request $request, $id)
    {
        Storage::disk('public')->delete(Article::find($id)->image);
        $photo=storage::disk('public')->put('articles', $request->image);
        $article = Article::find($id);
        $article->titre = $request->get('titre');
        $article->contenu = $request->get('contenu');
        $article->resume = $request->get('resume');
        $article->auteur_id = $request->get('auteur_id');
        $article->date_publication = date('Y-m-d H:i');
        $article->categorie_id = $request->get('categorie_id');
        $article->tags = $request->get('tags');
        $article->image = $photo;
        $article->video_link = $request->get('video_link');
        $article->statut = $request->get('statut');
        $article->save();

        return redirect('/admin/articles')->with('success', 'Article has been updated');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect('/articles')->with('success', 'Article has been deleted');
    }
}
