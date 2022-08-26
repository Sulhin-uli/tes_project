<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $response = Http::get("https://api.themoviedb.org/3/movie/now_playing?api_key=7986a95a62b57197f6ec7663a4079852");
        $result = json_encode($response["results"]);
        $datas = json_decode($result);
        return view('home', ['datas' => $datas]);
    }

    public function category()
    {
        return view('category');
    }

    public function category_show($category)
    {
        $response = Http::get("https://api.themoviedb.org/3/movie/" . $category . "?api_key=7986a95a62b57197f6ec7663a4079852");
        $result = json_encode($response["results"]);
        $datas = json_decode($result);
        return view('category_show', ['datas' => $datas]);
    }

    public function detail($id)
    {
        $response = Http::get("https://api.themoviedb.org/3/movie/" . $id . "?api_key=7986a95a62b57197f6ec7663a4079852");
        // $result = json_encode($response);
        $datas = json_decode($response);
        return view('detail', ['datas' => $datas]);
        // return $datas;
    }

    public function paginate_next()
    {
        $response = Http::get("https://api.themoviedb.org/3/movie/now_playing?api_key=7986a95a62b57197f6ec7663a4079852&page=2");
        $result = json_encode($response["results"]);
        $datas = json_decode($result);
        return view('home', ['datas' => $datas]);
    }
}
