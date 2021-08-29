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
use App\Models\Upload;
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

    public function category($id){
        $slide = Slide::where('active_status', 0)->get();
        $categories = News::where('categories_id', $id)->paginate(5);
        $new1 = $categories->shift();
        $new2 = $categories->shift();
        $new3 = $categories->shift();
        $new4 = $categories->shift();
        $new5 = $categories->shift();

        return view('users.pages.category')->with(compact('slide','categories','new1','new2','new3','new4','new5'));
    }

    public function news(){
        $categories = Categories::all();
        return view('users.pages.new')->with(compact('categories'));
    }

    public function newDetail($id) {
        $news = News::find($id);
        $category = Categories::where('id', $news->categories_id)->first();
        $next = News::where('id','>', $id)->orderBy('id','asc')->first();
        $previous = News::where('id', '<', $id)->orderBy('id', 'desc')->first();
        return view('users.pages.newDetail')->with(compact('news','next','previous','category'));
    }

    public function product(){
        $product = Product::all();
        return view('users.pages.product')->with(compact('product'));
    }
    public function productDetail($id){
        $product = Product::findOrFail($id);
        \Log::info($product);
        return view('users.pages.productDetail')->with(compact('product'));
    }
    public function shareholder() {
        $shareholder = Upload::paginate(20);

        return view('users.pages.shareholder')->with(compact('shareholder'));
    }

    public function shareHolderDownload($id){
        $shareholder = Upload::find($id);
        $file_path = public_path('upload/uploads/'.$shareholder->file);
        return response()->download($file_path);
    }
}