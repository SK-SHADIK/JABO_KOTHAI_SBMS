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
        Schema::create('student', function (Blueprint $table) {
            $table->id('s_id');
            $table->string('s_fname');
            $table->string('s_lname');
            $table->string('s_mail');
            $table->string('s_phn');
            $table->string('s_pass');
            $table->string('s_image');
            $table->string('s_gender');
            $table->string('s_add');
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
        Schema::dropIfExists('student');
    }
};
