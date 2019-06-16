<?php

use Illuminate\Database\Seeder;
use App\Models\Location;
use App\Models\LocationType;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $locationType = locationtype::all();
        $locations = [
            [
                'name' => 'Germany',
                'description' => 'Karlsruhe, DE',
                'locationtype_id' => $locationType[1]->id,
                'children' => [
                    [
                        'name' => 'Kronenplatz',
                        'description' => 'House on Kronenplatz',
                        'locationtype_id' => $locationType[2]->id,
                        'children' => [
                            ['name' => 'Garage', 'description' => 'Garage desc', 'locationtype_id' => $locationType[5]->id],
                            ['name' => 'Family ROom', 'description' => 'Family Room desc', 'locationtype_id'  => $locationType[5]->id],
                            ['name' => 'Master Bed', 'description' => 'Master Bedroom', 'locationtype_id' => $locationType[5]->id],
                        ],
                    ],
                    [
                        'name' => 'Berlin',
                        'description' => 'berlin flat',
                        'locationtype_id'  => $locationType[2]->id,
                        'children' => [
                            ['name' => 'Garage', 'description' => 'Garage desc', 'locationtype_id' => $locationType[5]->id],
                            ['name' => 'Family ROom', 'description' => 'Family Room desc', 'locationtype_id'  => $locationType[5]->id],
                            ['name' => 'Master Bed', 'description' => 'Master Bedroom', 'locationtype_id' => $locationType[5]->id],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'US',
                'description' => 'United States',
                'locationtype_id' => $locationType[1]->id,
                'children' => [
                    [
                        'name' => 'Iowa Warehouse',
                        'description' => 'Iowa Warehouse Desc',
                        'locationtype_id' => $locationType[4]->id,
                        'children' => [
                            ['name' => 'Main Warehouse', 'description' => 'Main', 'locationtype_id' => $locationType[5]->id],
                            ['name' => 'Back warehouse', 'description' => 'back desc', 'locationtype_id'  => $locationType[5]->id],
                        ],
                    ],
                    [
                        'name' => 'Ohio',
                        'description' => 'Ohio House',
                        'locationtype_id'  => $locationType[2]->id,
                        'children' => [
                            ['name' => 'Garage', 'description' => 'Garage desc', 'locationtype_id' => $locationType[5]->id],
                            ['name' => 'Family ROom', 'description' => 'Family Room desc', 'locationtype_id'  => $locationType[5]->id],
                            ['name' => 'Master Bed', 'description' => 'Master Bedroom', 'locationtype_id' => $locationType[5]->id],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Unassigned',
                'description' => 'No location',
                'locationtype_id' => $locationType[0]->id,
                'children' => [
                    ['name' => 'Garage', 'description' => 'Garage desc', 'locationtype_id' => $locationType[5]->id],
                ],
            ],
        ];
        foreach ($locations as $location) {
            location::create($location);
        }
    }
}
