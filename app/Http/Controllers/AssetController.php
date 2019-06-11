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
    
    public function assetsJSON()
    {
        // $assets=$this->locationSort();
        $assets = asset::all();
        
        $items = $this->makeTree($assets);
        
        $myJSON = json_encode($items);
        
        return ($myJSON);
    }
    
    public function assetIndexByLocation()
    {
        return view('categories.assetindex');
    }
}
