<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriesFormRequest;
use App\Models\category;
use App\Models\asset;
use App\Helpers\lists;

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
        $categories = category::get()->toTree()->toArray();
        $array = array_combine(
            array_map(function ($key) {
                if( $key === 'name' ) return 'title';
            }, array_keys($categories)),
            $categories
        );

        $myJSON = json_encode($array);
        return ($array);
    }

    public function tester()
    {
        $categories = [
            [
                'name' => 'Books',
                'description' => 'These are books',
                'type' => lists::CATEGORY_TYPE_BOOK,
                'children' => [
                    [
                        'name' => 'Comic Book',
                        'description' => 'These are Comics',
                        'children' => [
                            ['name' => 'Marvel Comic Book', 'description' => 'These are Marvel comics', 'type' => lists::CATEGORY_TYPE_BOOK,],
                            ['name' => 'DC Comic Book', 'description' => 'These are DC comics', 'type' => lists::CATEGORY_TYPE_BOOK,],
                            ['name' => 'Action comics', 'description' => 'These are Action comics', 'type' => lists::CATEGORY_TYPE_BOOK,],
                        ],
                    ],
                    [
                        'name' => 'Textbooks',
                        'description' => 'School Books',
                        'type' => lists::CATEGORY_TYPE_BOOK,
                        'children' => [
                            ['name' => 'Business', 'description' => 'These are Biz texts', 'type' => lists::CATEGORY_TYPE_BOOK,],
                            ['name' => 'Finance', 'description' => 'These are Finance', 'type' => lists::CATEGORY_TYPE_BOOK,],
                            ['name' => 'Computer Science', 'description' => 'These are Comp Sci', 'type' => lists::CATEGORY_TYPE_BOOK,],
                        ],
                    ],
                    [
                        'name' => 'Robins Books',
                        'description' => 'School Books',
                        'type' => lists::CATEGORY_TYPE_BOOK,
                        'children' => [
                            ['name' => 'Business', 'description' => 'These are Biz texts', 'type' => lists::CATEGORY_TYPE_BOOK,],
                            ['name' => 'Finance', 'description' => 'These are Finance', 'type' => lists::CATEGORY_TYPE_BOOK,],
                            ['name' => 'Computer Science', 'description' => 'These are Comp Sci', 'type' => lists::CATEGORY_TYPE_BOOK,], [
                                'name' => 'Textbooks',
                                'description' => 'School Books',
                                'type' => lists::CATEGORY_TYPE_BOOK,
                                'children' => [
                                    ['name' => 'Business', 'description' => 'These are Biz texts', 'type' => lists::CATEGORY_TYPE_BOOK,],
                                    ['name' => 'Finance', 'description' => 'These are Finance', 'type' => lists::CATEGORY_TYPE_BOOK,],
                                    ['name' => 'Computer Science', 'description' => 'These are Comp Sci', 'type' => lists::CATEGORY_TYPE_BOOK,],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Electronics',
                'description' => 'Misc Electronics',
                'type' => lists::CATEGORY_TYPE_ELECTRONICS,
                'children' => [
                    [
                        'name' => 'TV/Monitor',
                        'description' => 'Monitor or Television',
                        'type' => lists::CATEGORY_TYPE_ELECTRONICS,
                        'children' => [
                            ['name' => 'LED', 'description' => 'LED TV', 'type' => lists::CATEGORY_TYPE_ELECTRONICS,],
                            ['name' => 'Monitor', 'description' => 'Monitor', 'type' => lists::CATEGORY_TYPE_ELECTRONICS,],
                        ],
                    ],
                    [
                        'name' => 'Phones',
                        'description' => 'Telephones',
                        'type' => lists::CATEGORY_TYPE_ELECTRONICS,
                        'children' => [
                            ['name' => 'Samsung', 'description' => 'Android', 'type' => lists::CATEGORY_TYPE_ELECTRONICS,],
                            ['name' => 'iPhone', 'description' => 'iPhone', 'type' => lists::CATEGORY_TYPE_ELECTRONICS,],
                            ['name' => 'Xiomi', 'description' => 'Other', 'type' => lists::CATEGORY_TYPE_ELECTRONICS,],
                        ],
                    ],
                ],
            ],
        ];
        dd($categories);
    }
}