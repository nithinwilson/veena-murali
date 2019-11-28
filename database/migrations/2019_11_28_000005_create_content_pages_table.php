<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentPagesTable extends Migration
{
    public function up()
    {
        Schema::create('content_pages', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->nullable();

            $table->longText('page_text')->nullable();

            $table->string('slug')->nullable();

            $table->string('status')->nullable();

            $table->string('meta_title')->nullable();

            $table->longText('meta_keywords')->nullable();

            $table->longText('meta_description')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
