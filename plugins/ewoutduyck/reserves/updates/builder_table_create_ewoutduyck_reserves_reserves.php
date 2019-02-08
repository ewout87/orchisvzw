<?php namespace EwoutDuyck\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEwoutduyckReservesReserves extends Migration
{
    public function up()
    {
        Schema::create('ewoutduyck_reserves_reserves', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ewoutduyck_reserves_reserves');
    }
}
