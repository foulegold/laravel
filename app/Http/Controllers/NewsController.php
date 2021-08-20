<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', ['newsList' => News::query()->orderBy('id', 'desc')->paginate(config('pagination.main.news'))]);
    }

    public function categories()
    {
        return 'All categories';
    }

    public function currentCategory(int $id)
    {
        return "All news by category №{$id}";
    }

    public function show(News $news)
    {
        return view('news.article', ['news' => $news]);
    }
}
