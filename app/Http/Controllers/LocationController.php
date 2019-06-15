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


    public function fancyloc1()
    {
        return view('locations.fancyoldtree');
    }

    public function fancyloc2()
    {
        return view('locations.fancynewtree');
    }

    public function locationsJSONOldTree()
    {
        $tree = location::all()->toTree();

        // return (var_dump($tree));

        $myJSON = json_encode($tree);
        return ($myJSON);
    }

    public function locationsJSONNewTreeold()
    {

        $locations = location::all();
        $tree = collect([]);
        foreach ($locations as $location) {
            //$tree->put($location['id'], collect(['id' => $location['id'], 'title' => $location['name']]));
            $tree[] = collect(['id' => $location['id'], 'title' => $location['name']]);
            foreach ($location['assets'] as $asset) {
                //$tree[$location['id']]->put('children', collect(['id' => $asset->id, 'title' => $asset->name]));
                $tree[]['children'] = collect(['id' => $asset->id, 'title' => $asset->name]);
            }
        }
        //         sigh, get tree, loop through recursively fixing names
        // return (var_dump($tree));
        // $tree->groupBy();
        // return (var_dump($tree));
        $myJSON = json_encode($tree);
        return ($myJSON);
    }


    public function locationsJSONNewTree()
    {
        $locations = location::all();
        $locations->linkNodes();

        // Fix titles
        foreach ($locations as $location) {
            $location['title'] = $location['name'];
        }

        $myJSON = json_encode($locations);
        return ($myJSON);
    }
}
