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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreign('id')->references('id')->on('groups');
            $table->enum('Tipe',['Early Bird','Binusian','Non-Binusian']);
            $table->string('No_Rek');
            $table->string('Bank');
            $table->string('Nama');
            $table->string('Bukti');
            // $table->boolean('Verifikasi');
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
        Schema::dropIfExists('payments');
    }
};
