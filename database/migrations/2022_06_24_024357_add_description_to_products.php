<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /*
     creado con php artisan make:migration add_description_to_products 
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('Description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('Description');
        });
    }
}
