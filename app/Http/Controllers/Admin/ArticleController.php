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

        Article::Create([
            'author_id' => auth()->user()->id,
            'title'     => $request->title,
            'contents'  => $request->contents,


        ]);

    }

    public function displayArticles()
    {
        return view('admin.articles.main', [
            'articles' => Article::paginate(10),
        ]);
    }
}
