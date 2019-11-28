<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquiriesTable extends Migration
{
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();

            $table->string('phone_number')->nullable();

            $table->string('email')->nullable();

            $table->longText('message')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
