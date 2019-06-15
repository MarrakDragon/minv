<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Location;

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


    public function fancy()
    {
        return view('locations.fancy');
    }

    public function locationsJSON()
    {

        $locs = location::get()->transform(function ($item, $tree) {
            $item['title'] = $item['name'];
            return $item;
        })->ToTree();
        $myJSON = json_encode($locs);
        return ($myJSON);
    }
}
