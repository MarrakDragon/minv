<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriesFormRequest;
use App\Models\category;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { }

    /**
     * Display a listing of the categories.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $categories = category::get()->toTree();
        $myJSON = json_encode($categories);

        return view('categories.index', compact('categories', 'myJSON'));
    }

    public function fancyindex()
    {
        $categories = category::get()->toTree();
        $myJSON = json_encode($categories);

        return view('categories.fancyindex');
    }

    public function categoriesJSON()
    {
        $categories = category::get()->toTree();
        $myJSON = json_encode($categories);

        return $myJSON;
    }
}
