<?php namespace EwoutDuyck\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEwoutduyckReservesReserves3 extends Migration
{
    public function up()
    {
        Schema::table('ewoutduyck_reserves_reserves', function($table)
        {
            $table->text('excerpt')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('ewoutduyck_reserves_reserves', function($table)
        {
            $table->string('excerpt', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
