<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPrizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_prize', function (Blueprint $table) {
            $table->unsignedBigInteger('prizes_id');
            $table->foreign('prizes_id')
            ->refernces('id')
            ->on('prizes')
            ->cascade('delete');
            $table->unsignedBigInteger('userrs_id');
            $table->foreign('userrs_id')
            ->refernces('id')
            ->on('userrs')
            ->cascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_prize');
    }
}
