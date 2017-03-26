<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuaderTable extends Migration
{
   public function up(){
       Schema::create('quader', function (Blueprint $table) {
            $table->increments('quader_id');
            $table->decimal('breite', 10, 2);
            $table->decimal('lange', 10, 2);
            $table->decimal('hohe', 10, 2);
            $table->decimal('oberflache', 10, 2);
            $table->decimal('volumen', 10, 2);
            $table->timestamps();
        });
	}
	public function down()
    {
        Schema::dropIfExists('quader');
    }
}
