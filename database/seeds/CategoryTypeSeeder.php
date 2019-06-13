<?php

use Illuminate\Database\Seeder;
use App\Models\CategoryType;
use App\Helpers\Lists;

class CategoryTypeSeeder extends Seeder
{ 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorytypes = [
            ['name' => 'Book'],
            ['name' => 'Asset'],
            ['name' => 'Hobby'],
            ['name' => 'Furniture'],
            ['name' => 'Container'],
            ['name' => 'Electronics'],
            ['name' => 'Location'],
            ['name' => 'Room'],
            ['name' => 'Other'],
                
        ];
        foreach ($categorytypes as $categorytype) {
            categorytype::create($categorytype);
        }
  
    }
    
}
