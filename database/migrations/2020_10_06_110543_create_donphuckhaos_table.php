<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonphuckhaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donphuckhaos', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('idhocsinh');
			$table->bigInteger('idtruonghoc');
			$table->bigInteger('idmonhoc');
			$table->integer('phuckhao');
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
        Schema::dropIfExists('donphuckhaos');
    }
}
