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
        Schema::create('passenger', function (Blueprint $table) {
            $table->id('p_id');
            $table->string('p_name');
            $table->string('p_mail');
            $table->string('p_phn');
            $table->string('p_pass');
            $table->string('p_image');
            $table->string('p_gender');
            $table->string('p_add');
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
        Schema::dropIfExists('passenger');
    }
};
