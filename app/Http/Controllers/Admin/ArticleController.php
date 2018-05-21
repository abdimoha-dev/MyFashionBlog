<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Requests\Admin\SaveArticlesRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function showArticlesForms()
    {
        return view('admin.articles.post');
    }

    public function saveArticles(Request $request)
    {
        dd($request->toArray());
        Article::Create([
            'author_id' => auth()->user()->id,
            'title'     => $request->title,
            'contents'   => $request->contents,

        ]);
    }
}
