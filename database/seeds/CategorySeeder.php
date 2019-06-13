<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\CategoryType;

class CategorySeeder extends Seeder
{ 

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorytype = categorytype::all();

        $categories = [
            [
                'name' => 'Books',
                'description' => 'These are books',
                'categorytype_id' => $categorytype[0]->id,
                'children' => [
                    [
                        'name' => 'Comic Book',
                        'description' => 'These are Comics',
                        'children' => [
                            ['name' => 'Marvel Comic Book', 'description' => 'These are Marvel comics', 'categorytype_id' => $categorytype[0]->id],
                            ['name' => 'DC Comic Book', 'description' => 'These are DC comics', 'categorytype_id' => $categorytype[0]->id],
                            ['name' => 'Action comics', 'description' => 'These are Action comics', 'categorytype_id' => $categorytype[0]->id],
                        ],
                    ],
                    [
                        'name' => 'Textbooks',
                        'description' => 'School Books',
                        'categorytype_id' => $categorytype[0]->id,
                        'children' => [
                            ['name' => 'Business', 'description' => 'These are Biz texts', 'categorytype_id' => $categorytype[0]->id],
                            ['name' => 'Finance', 'description' => 'These are Finance', 'categorytype_id' => $categorytype[0]->id],
                            ['name' => 'Computer Science', 'description' => 'These are Comp Sci', 'categorytype_id' => $categorytype[0]->id],
                        ],
                    ],
                    [
                        'name' => 'Robins Books',
                        'description' => 'School Books',
                        'categorytype_id' => $categorytype[0]->id,
                        'children' => [
                            ['name' => 'Business', 'description' => 'These are Biz texts', 'categorytype_id' => $categorytype[0]->id],
                            ['name' => 'Finance', 'description' => 'These are Finance', 'categorytype_id' => $categorytype[0]->id],
                            ['name' => 'Computer Science', 'description' => 'These are Comp Sci', 'categorytype_id' => $categorytype[0]->id], [
                                'name' => 'Textbooks',
                                'description' => 'School Books',
                                'categorytype_id' => $categorytype[0]->id,
                                'children' => [
                                    ['name' => 'Business', 'description' => 'These are Biz texts', 'categorytype_id' => $categorytype[0]->id],
                                    ['name' => 'Finance', 'description' => 'These are Finance', 'categorytype_id' => $categorytype[0]->id],
                                    ['name' => 'Computer Science', 'description' => 'These are Comp Sci', 'categorytype_id' => $categorytype[0]->id],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Electronics',
                'description' => 'Misc Electronics',
                'categorytype_id' => $categorytype[5]->id,
                'children' => [
                    [
                        'name' => 'TV/Monitor',
                        'description' => 'Monitor or Television',
                        'categorytype_id' => $categorytype[5]->id,
                        'children' => [
                            ['name' => 'LED', 'description' => 'LED TV', 'categorytype_id' => $categorytype[5]->id],
                            ['name' => 'Monitor', 'description' => 'Monitor', 'categorytype_id' => $categorytype[5]->id],
                        ],
                    ],
                    [
                        'name' => 'Phones',
                        'description' => 'Telephones',
                        'categorytype_id' => $categorytype[5]->id,
                        'children' => [
                            ['name' => 'Samsung', 'description' => 'Android', 'categorytype_id' => $categorytype[5]->id],
                            ['name' => 'iPhone', 'description' => 'iPhone', 'categorytype_id' => $categorytype[5]->id],
                            ['name' => 'Xiomi', 'description' => 'Other', 'categorytype_id' => $categorytype[5]->id],
                        ],
                    ],
                ],
            ],
        ];
        foreach ($categories as $category) {
            category::create($category);
        }
  
    }
    
}
