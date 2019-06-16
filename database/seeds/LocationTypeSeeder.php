<?php

use Illuminate\Database\Seeder;
use App\Models\LocationType;
use App\Helpers\Lists;

class LocationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locationtypes = [
            ['name' => 'None'],
            ['name' => 'Country'],
            ['name' => 'House'],
            ['name' => 'Office'],
            ['name' => 'Warehouse'],
            ['name' => 'Room'],
            ['name' => 'Container'],
            ['name' => 'Shed'],
            ['name' => 'Box'],

        ];
        foreach ($locationtypes as $locationtype) {
            locationtype::create($locationtype);
        }
    }
}
