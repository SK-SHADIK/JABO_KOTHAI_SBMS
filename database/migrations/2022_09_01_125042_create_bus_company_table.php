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
        Schema::create('busCompany', function (Blueprint $table) {
            $table->id('bCom_id');
            $table->string('bCom_fname');
            $table->string('bCom_lname');
            $table->string('bCom_mail');
            $table->string('bCom_phn');
            $table->string('bCom_pass');
            $table->string('bCom_image');
            $table->string('bCom_gender');
            $table->string('bCom_add');
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
        Schema::dropIfExists('busCompany');
    }
};
