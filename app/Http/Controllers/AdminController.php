<?php

namespace App\Http\Controllers;

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

            $title = $request->input('title');
            $description = $request->input('description');
            if ($title == '') {
                return redirect()->route('admin.create-news');
            }

            return redirect()->route('admin');
        }
        return view('admin.create-news');
    }
}
