<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKreiseTable extends Migration
{
    public function up(){
       Schema::create('kreise', function (Blueprint $table) {
            $table->increments('id');
            $table->double('radius', 15, 2);
            $table->double('durchmesser', 15, 2);
            $table->double('umfang', 15, 2);
            $table->double('flacheninhalt', 15, 2);
            $table->timestamps();
        });
	}
	public function down()
    {
        Schema::dropIfExists('kreise');
    }
}
