<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();

            $table->longText('description')->nullable();

            $table->string('slug')->nullable();

            $table->string('heading')->nullable();

            $table->string('height')->nullable();

            $table->string('width')->nullable();

            $table->string('weight')->nullable();

            $table->string('stock_available')->nullable();

            $table->string('delivery_days')->nullable();

            $table->string('meta_title')->nullable();

            $table->longText('meta_keywords')->nullable();

            $table->longText('meta_description')->nullable();

            $table->string('status')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
