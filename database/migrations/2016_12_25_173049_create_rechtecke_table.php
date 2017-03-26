<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRechteckeTable extends Migration
{
    public function up(){
       Schema::create('rechtecke', function (Blueprint $table) {
            $table->increments('rechteck_id');
            $table->decimal('breite', 10, 2);
            $table->decimal('lange', 10, 2);
            $table->decimal('flacheninahlt', 10, 2);
            $table->timestamps();
        });
	}
	public function down()
    {
        Schema::dropIfExists('rechtecke');
    }
}
