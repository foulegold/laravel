<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class NewsController extends Controller
{
    public function index()
    {
        return 'All news';
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
        return "News №{$id}";
    }
}
