php artisan create:scaffold category --table-exists --controller-name=CategoryController --with-auth --language-filename=categories --with-soft-delete --engine-name=INNODB --translation-for=en --models-per-page=10 --with-form-request --force
php artisan make:migration create_categories_table
php artisan api-docs:create-controller category
php artisan api-docs:create-view category
php artisan create:api-scaffold category
php artisan create:language categories
php artisan make:request category
php artisan make:seeder category