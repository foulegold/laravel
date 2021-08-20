<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function createNews(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->flash();

            $request->validate([
                'title' => ['required', 'string'],
            ]);

            $news = News::create($request->only(['title', 'description', 'category_id']));
            if (!$news) {
                return back()->withInput();
            }

            return redirect()->route('admin');
        }
        return view('admin.create-news', ['categories' => Category::all()]);
    }
}
