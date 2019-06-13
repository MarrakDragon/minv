<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\asset;

class AssetController extends Controller
{
    public function locationSort()
    {
        $assets = asset::all();
        return $assets->sortBy('location_id')
        ->sortBy('room_id')
        ->sortBy('container_id')
        ->groupBy('location_id', 'room_id', 'container_id')
        ->values();
    }
    
       
    // assumes location_id 0 is no location, same for room and container
    protected function makeTree($assets) {
        $locAssets = $assets->pluck('location_id');
        $tree = array();
        foreach ($locAssets as $asset)
        {
            $tree[] = ['location_id' => $asset];
        }

        return $tree;
    }
    
    public function assetsJSON()
    {
        $assets = asset::all();
        
        $items = $this->makeTree($assets);
        dd($items);
        
        $myJSON = json_encode($items);
        
        return ($myJSON);
    }
    
    public function assetIndexByLocation()
    {
        return view('categories.assetindex');
    }
}
