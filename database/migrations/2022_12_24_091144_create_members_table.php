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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_Tim');
            $table->foreign('id_Tim')->references('id')->on('groups');
            $table->string('Nama');
            $table->string('Email');
            $table->string("Whatsapp");
            $table->string('Line');
            $table->string('Github');
            $table->string('Tpt_Lahir');
            $table->date('Tgl_Lahir');
            $table->string('CV');
            $table->string('Kartu');
            $table->boolean('isAdmin')->default(0);
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
        Schema::dropIfExists('members');
    }
};
