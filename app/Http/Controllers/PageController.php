<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Slide;
use App\Models\Settings;
use App\Models\Menus;
use App\Models\News;
use App\Models\Product;
use App\Models\Categories;
class PageController extends Controller
{
    function __construct()
    {
        $menu = Menus::select('menus.*', 'news.slug as newslug', 'categories.slug as cateslug')
        ->leftJoin('categories', 'categories.id', '=','menus.page_id')
        ->leftJoin('news', 'news.id', '=','menus.page_id')
        ->orderBy('menu_order', 'asc')
        ->where('menus.parent_id', 0)
        ->take(8)
        ->get();
        $setting = Settings::OrderBy('id','desc')->first();
        $slide = Slide::where('active_status', 0)->get();
        view()->share('menu', $menu);
        view()->share('setting', $setting);
        view()->share('slide', $slide);
    }

    public function home(){
        $news = News::orderBy('id', 'desc')->take(5)->get();
        $new1 = $news->shift();
        $new2 = $news->shift();
        $new3 = $news->shift();
        $new4 = $news->shift();
        $new5 = $news->shift();

        $products = Product::orderBy('id', 'desc')->take(9)->get();
        return view('users.pages.homepage')->with(compact('new1','new2', 'new3', 'new4', 'new5', 'products'));
    }

    public function aboutus(){
        return view('users.pages.aboutus');
    }

    public function news(){
        $categories = Categories::all();

        return view('users.pages.new')->with(compact('categories'));
    }

    public function product(){
        return view('users.pages.product');
    }

    public function shareholder(){
        return view('users.pages.shareholder');
    }
}