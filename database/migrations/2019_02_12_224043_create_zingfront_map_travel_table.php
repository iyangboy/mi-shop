<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZingfrontMapTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zingfront_map_travel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('省份名称');
            $table->boolean('is_travel')->default(false)->comment('知否标记为已旅行');
            $table->string('remarks')->comment('备注信息');
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
        Schema::dropIfExists('zingfront_map_travel');
    }
}
