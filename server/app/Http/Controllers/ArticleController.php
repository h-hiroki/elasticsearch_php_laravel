<?php

namespace App\Http\Controllers;

use App\Article;
use App\Articles\EloquentRepository;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * 全件表示
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles =  Article::all();
        return view('article', compact('articles'));
    }

    /**
     * フリーワード検索
     */
    public function searchByEloquent(Request $request)
    {
        $search_word = $request->q;
        $eloquent_repository = app('App\Articles\EloquentRepository');
        $articles = $eloquent_repository->search($search_word);

        return view('article', compact('articles'));
    }

    /**
     * フリーワード検索
     */
    public function search(Request $request)
    {
        $search_word = $request->q;
        $elasticsearch_repository = app('App\Articles\ElasticsearchRepository');
        $articles = $elasticsearch_repository->search($search_word);
        dd($articles);
        return view('article', compact('articles'));

    }
}
