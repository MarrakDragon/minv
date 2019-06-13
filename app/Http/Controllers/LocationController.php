<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LocationsFormRequest;
use App\Models\Location;
use App\Models\asset;
use App\Helpers\lists;

class LocationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { }

    /**
     * Display a listing of the Locations.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $locations = location::get()->toTree();
        $myJSON = json_encode($locations);

        return view('locations.index', compact('locations', 'myJSON'));
    }

    public function fancyindex()
    {
        $locations = location::get()->toTree();
        $myJSON = json_encode($locations);

        return view('locations.fancyindex');
    }

    public function locationsJSON()
    {
        $locations = location::get()->toTree()->toArray();
        $array = array_combine(
            array_map(function ($key) {
                if( $key === 'name' ) return 'title';
            }, array_keys($locations)),
            $locations
        );

        $myJSON = json_encode($array);
        return ($array);
    }

    public function tester()
    {
        $locations = [
            [
                'name' => 'Books',
                'description' => 'These are books',
                'type' => lists::location_TYPE_BOOK,
                'children' => [
                    [
                        'name' => 'Comic Book',
                        'description' => 'These are Comics',
                        'children' => [
                            ['name' => 'Marvel Comic Book', 'description' => 'These are Marvel comics', 'type' => lists::location_TYPE_BOOK,],
                            ['name' => 'DC Comic Book', 'description' => 'These are DC comics', 'type' => lists::location_TYPE_BOOK,],
                            ['name' => 'Action comics', 'description' => 'These are Action comics', 'type' => lists::location_TYPE_BOOK,],
                        ],
                    ],
                    [
                        'name' => 'Textbooks',
                        'description' => 'School Books',
                        'type' => lists::location_TYPE_BOOK,
                        'children' => [
                            ['name' => 'Business', 'description' => 'These are Biz texts', 'type' => lists::location_TYPE_BOOK,],
                            ['name' => 'Finance', 'description' => 'These are Finance', 'type' => lists::location_TYPE_BOOK,],
                            ['name' => 'Computer Science', 'description' => 'These are Comp Sci', 'type' => lists::location_TYPE_BOOK,],
                        ],
                    ],
                    [
                        'name' => 'Robins Books',
                        'description' => 'School Books',
                        'type' => lists::location_TYPE_BOOK,
                        'children' => [
                            ['name' => 'Business', 'description' => 'These are Biz texts', 'type' => lists::location_TYPE_BOOK,],
                            ['name' => 'Finance', 'description' => 'These are Finance', 'type' => lists::location_TYPE_BOOK,],
                            ['name' => 'Computer Science', 'description' => 'These are Comp Sci', 'type' => lists::location_TYPE_BOOK,], [
                                'name' => 'Textbooks',
                                'description' => 'School Books',
                                'type' => lists::location_TYPE_BOOK,
                                'children' => [
                                    ['name' => 'Business', 'description' => 'These are Biz texts', 'type' => lists::location_TYPE_BOOK,],
                                    ['name' => 'Finance', 'description' => 'These are Finance', 'type' => lists::location_TYPE_BOOK,],
                                    ['name' => 'Computer Science', 'description' => 'These are Comp Sci', 'type' => lists::location_TYPE_BOOK,],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Electronics',
                'description' => 'Misc Electronics',
                'type' => lists::location_TYPE_ELECTRONICS,
                'children' => [
                    [
                        'name' => 'TV/Monitor',
                        'description' => 'Monitor or Television',
                        'type' => lists::location_TYPE_ELECTRONICS,
                        'children' => [
                            ['name' => 'LED', 'description' => 'LED TV', 'type' => lists::location_TYPE_ELECTRONICS,],
                            ['name' => 'Monitor', 'description' => 'Monitor', 'type' => lists::location_TYPE_ELECTRONICS,],
                        ],
                    ],
                    [
                        'name' => 'Phones',
                        'description' => 'Telephones',
                        'type' => lists::location_TYPE_ELECTRONICS,
                        'children' => [
                            ['name' => 'Samsung', 'description' => 'Android', 'type' => lists::location_TYPE_ELECTRONICS,],
                            ['name' => 'iPhone', 'description' => 'iPhone', 'type' => lists::location_TYPE_ELECTRONICS,],
                            ['name' => 'Xiomi', 'description' => 'Other', 'type' => lists::location_TYPE_ELECTRONICS,],
                        ],
                    ],
                ],
            ],
        ];
        dd($locations);
    }
}