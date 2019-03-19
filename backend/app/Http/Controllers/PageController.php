<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($name)
    {
        $page = Page::where('name', $name)->first();
        if (!$page) {
            abort(404);
        }
        return view('page', ['page' => $page]);
    }
}
