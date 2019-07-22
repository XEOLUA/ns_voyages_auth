<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class PagesController extends Controller
{
    //повернення екземпляру колекції Pages
    public function showPage($slug)
    {
        $page = Page::where('slug', $slug)->first();
//        dd($page);
        return view('welcome', ['page' => $page]);
    }

    //повернення екземпляру slug=page-1 колекції Pages
    public function showMainPage()
    {
        $page = Page::where('slug', setting('site.slugMainPage'))->first();
//        dd($page);
        return view('welcome', ['page' => $page]);
    }
}
