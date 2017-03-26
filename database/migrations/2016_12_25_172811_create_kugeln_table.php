<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKugelnTable extends Migration
{
    public function up(){
       Schema::create('kugeln', function (Blueprint $table) {
            $table->increments('kugel_id');
           $table->double('radius', 15, 2);
            $table->double('durchmesser', 15, 2);
            $table->double('umfang', 15, 2);
            $table->double('oberflache', 15, 2);
            $table->double('volumen', 15, 2);
            $table->timestamps();
        });
	}
	public function down()
    {
        Schema::dropIfExists('kugeln');
    }
}
