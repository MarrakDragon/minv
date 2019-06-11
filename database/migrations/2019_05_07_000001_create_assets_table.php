<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;



class CreateAssetsTable extends Migration
{
    use SoftDeletes;

    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'assets';

    /**
     * Run the migrations.
     * @table assets
     *
     * @return void
     */
    public function up()
    {

        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->integer('asset_tag')->default('1');
            $table->string('name', 255)->nullable()->default(null);
            $table->mediumText('description')->nullable()->default(null);
            $table->mediumText('notes')->nullable()->default(null);

            // qty
            $table->integer('quantity')->nullable()->default('1');
            $table->integer('quantity_type')->nullable()->default('1');

            // Barcodes/identifiers
            $table->string('barcodenumber', 255)->nullable()->default(null);
            $table->string('ean', 255)->nullable()->default(null);
            $table->string('upc', 255)->nullable()->default(null);
            $table->string('asin', 255)->nullable()->default(null);


            // product Info
            $table->string('serial_number', 255)->nullable()->default(null);
            $table->string('make', 255)->nullable()->default(null);
            $table->string('modelname_id', 255)->nullable()->default(null);
            $table->string('brand', 255)->nullable()->default(null);
            $table->string('manufacturer', 255)->nullable()->default(null);
            $table->string('url', 255)->nullable()->default(null);

            // Book info
            $table->string('title', 255)->nullable()->default(null);
            $table->string('author', 255)->nullable()->default(null);
            $table->string('cover_artist', 255)->nullable()->default(null);
            $table->string('publisher', 255)->nullable()->default(null);
            $table->string('published_date', 255)->nullable()->default(null);
            $table->string('series', 255)->nullable()->default(null);
            $table->string('illustrator', 255)->nullable()->default(null);
            $table->string('edition', 255)->nullable()->default(null);
            $table->string('isbn_10', 255)->nullable()->default(null);
            $table->string('isbn_13', 255)->nullable()->default(null);
            $table->integer('page_count')->nullable()->default(null);

            // record status
            $table->integer('is_draft')->default('1');


            // Relationships
            $table->integer('image_id')->nullable()->default(null);             // Hero image
            $table->integer('category_id')->nullable()->default(null);          // Category
            $table->integer('barcodetype_id')->nullable()->default(null);      // Barcode type
            $table->integer('status_id')->nullable()->default(null);            // Item status
            $table->integer('location_id')->nullable()->default(null);          // Location
            $table->integer('room_id')->nullable()->default(null);              // Room
            $table->integer('container_id')->nullable()->default(null);         // Container
            $table->integer('format_id')->nullable()->default(null);            // Book format
            $table->integer('genre_id')->nullable()->default(null);             // Book genre
            $table->integer('country_id')->nullable()->default(null);           // Book country
            $table->integer('language_id')->nullable()->default(null);          // Book language
            $table->integer('condition_id')->nullable()->default(null);         // Book condition
            $table->integer('user_id')->nullable()->default(null);              // Owner

            // Dates
            $table->date('dateadded_dt')->nullable()->default(null);
            $table->date('datepurchased_dt')->nullable()->default(null);

            // Value
            $table->integer('value')->nullable()->default(null);
            $table->integer('purchase_cost')->nullable()->default(null);
            $table->integer('depreciated_value')->nullable()->default(null);

            // Insurance Info
            $table->string('insured_by', 255)->nullable()->default(null);
            $table->integer('insured_value')->nullable()->default(null);


            // Warranty info
            $table->string('warrantor', 255)->nullable()->default(null);
            $table->date('warranty_start_dt')->nullable()->default(null);
            $table->integer('warranty_length_mo')->nullable()->default(null);

            $table->softDeletes();
            $table->index(["id"], 'assets_id_index');
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
