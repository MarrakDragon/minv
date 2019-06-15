<?php

use Illuminate\Database\Seeder;
use App\Models\Asset;
use App\Models\Location;
use Faker\Generator as Faker;

class AssetSeeder extends Seeder
{

    protected function makeRandomLocatedAsset($location = null)
    {

        $fake = \Faker\Factory::create();
        $asset = [
            'asset_tag' => $fake->randomDigitNotNull,
            'name' => $fake->word, 'description' => $fake->paragraph, 'notes' => $fake->paragraph,
            'quantity' => $fake->randomDigitNotNull, 'quantity_type' => $fake->randomDigitNotNull,
            'barcodenumber' => $fake->ean13, 'ean' => $fake->ean13, 'upc' => $fake->ean13, 'asin' => $fake->word,
            'serial_number' => $fake->word,
            'make' => $fake->word, 'modelname_id' => $fake->word, 'brand' => $fake->word, 'manufacturer' => $fake->word,
            'url' => $fake->url,
            'title' => $fake->realText, 'author' => $fake->name, 'cover_artist' => $fake->name, 'series' => $fake->catchPhrase, 'illustrator' => $fake->name, 'edition' => $fake->text, 'publisher' => $fake->company,
            'published_date' => $fake->date, 'isbn_10' => $fake->isbn10, 'isbn_13' => $fake->isbn13, 'page_count' => $fake->randomDigitNotNull,
            'image_id' => $fake->randomNumber,
            'category_id' => $fake->randomDigitNotNull,
            'barcodetype_id' => $fake->randomDigitNotNull,
            'status_id' => $fake->randomDigitNotNull,
            'location_id' => $location ?? $fake->randomDigitNotNull,
            'format_id' => $fake->randomNumber,
            'genre_id' => $fake->randomNumber,
            'country_id' => $fake->randomNumber,
            'language_id' => $fake->randomNumber,
            'condition_id' => $fake->randomNumber,
            'user_id' => $fake->randomNumber,
            'dateadded_dt' => $fake->date('Y-m-d'), 'datepurchased_dt' => $fake->date('Y-m-d'), 'value' => $fake->randomNumber, 'purchase_cost' => $fake->randomNumber, 'depreciated_value' => $fake->randomNumber,
            'insured_by' => $fake->company, 'insured_value' => $fake->randomNumber,
            'depreciated_value' => $fake->randomDigitNotNull, 'warranty_start_dt' => $fake->date('Y-m-d'), 'warranty_length_mo' => $fake->randomDigitNotNull,
            'deleted_at' => $fake->date('Y-m-d H:i:s'), 'created_at' => $fake->date('Y-m-d H:i:s'), 'updated_at' => $fake->date('Y-m-d H:i:s')
        ];

        asset::create($asset);
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $location = location::all();
        $totalLocs = $location->count();


        // // Random located assets
        // for ($i = 1; $i <= 25; $i++) {
        //     $this->makeRandomLocatedAsset(rand(0, $totalLocs));
        // }
        // Random not located assets
        for ($i = 1; $i <= 25; $i++) {
            $this->makeRandomLocatedAsset(rand(0, 5));
        }
    }
}
