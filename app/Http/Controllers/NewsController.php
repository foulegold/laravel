<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', ['newsList' => $this->newsList]);
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
        return view('news.article', ['news' => $this->newsList[$id]]);
    }
}
