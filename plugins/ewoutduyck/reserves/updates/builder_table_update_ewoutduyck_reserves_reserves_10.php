<?php namespace EwoutDuyck\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEwoutduyckReservesReserves10 extends Migration
{
    public function up()
    {
        Schema::table('ewoutduyck_reserves_reserves', function($table)
        {
            $table->string('coordinates', 191);
            $table->dropColumn('longitude');
            $table->dropColumn('latitude');
        });
    }
    
    public function down()
    {
        Schema::table('ewoutduyck_reserves_reserves', function($table)
        {
            $table->dropColumn('coordinates');
            $table->string('longitude', 191);
            $table->string('latitude', 191);
        });
    }
}
