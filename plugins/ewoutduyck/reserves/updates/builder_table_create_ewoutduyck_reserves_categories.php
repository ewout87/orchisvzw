<?php namespace EwoutDuyck\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEwoutduyckReservesCategories extends Migration
{
    public function up()
    {
        Schema::create('ewoutduyck_reserves_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ewoutduyck_reserves_categories');
    }
}
