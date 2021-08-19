<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $newsModel = new News();
        dd($newsModel->getNews());
        return view('news.index', ['newsList' => $newsModel->getNews()]);
    }

    public function categories()
    {
        return 'All categories';
    }

    public function currentCategory(int $id)
    {
        return "All news by category №{$id}";
    }

    public function show(int $id)
    {
        $newsModel = new News();
        return view('news.article', ['news' => $newsModel->getNewsById($id)]);
    }
}
