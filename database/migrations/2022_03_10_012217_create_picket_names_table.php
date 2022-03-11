<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('picket_names', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->smallInteger('min_member')->nullable()->default(1);
            $table->smallInteger('max_member')->nullable()->default(1);
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
        Schema::table('picket_names', function (Blueprint $table) {
            //
        });
    }
};
