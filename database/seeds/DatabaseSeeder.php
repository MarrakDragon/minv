<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Helpers\Lists;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected function seedCategory()
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
        foreach ($categories as $category) {
            category::create($category);
        }
    }
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->seedCategory();
    }
}
