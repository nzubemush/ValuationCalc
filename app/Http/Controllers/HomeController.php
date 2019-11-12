<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Formula;
use App\Subtopic;
use App\Topic;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $categories = Categories::all();

        return view('home', compact('categories'));
    }
    
    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Categories::class, 'name')
            ->registerModel(Topic::class, 'name')
            ->registerModel(Subtopic::class, 'name')
            ->perform($request->input('query'));

        return view('search', compact('searchResults'));
    }
}
