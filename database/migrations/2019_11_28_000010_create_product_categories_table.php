<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();

            $table->longText('description')->nullable();

            $table->string('slug')->nullable();

            $table->string('status')->nullable();

            $table->string('meta_title')->nullable();

            $table->longText('meta_keywords')->nullable();

            $table->longText('meta_description')->nullable();

            $table->longText('bottom_content')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
