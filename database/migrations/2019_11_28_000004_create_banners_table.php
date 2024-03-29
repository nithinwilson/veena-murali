<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->nullable();

            $table->string('link_title')->nullable();

            $table->string('link_url')->nullable();

            $table->string('status')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
