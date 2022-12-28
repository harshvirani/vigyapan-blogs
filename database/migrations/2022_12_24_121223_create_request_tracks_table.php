<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_tracks', function (Blueprint $table) {
            $table->id();
            $table->string("route");
            $table->json("request_data");
            $table->integer("user_id")->nullable();
            $table->string("ip");
            $table->string("country")->nullable();
            $table->string("country_code")->nullable();
            $table->string("region")->nullable();
            $table->string("region_name")->nullable();
            $table->string("city")->nullable();
            $table->string("zip")->nullable();
            $table->double("lat")->nullable();
            $table->double("long")->nullable();
            $table->string("timezone")->nullable();
            $table->string("isp")->nullable();
            $table->string("org")->nullable();
            $table->string("as")->nullable();
            $table->string("status")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_tracks');
    }
}
