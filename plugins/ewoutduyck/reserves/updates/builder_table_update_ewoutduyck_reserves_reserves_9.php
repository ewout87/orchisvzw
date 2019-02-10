<?php namespace EwoutDuyck\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEwoutduyckReservesReserves9 extends Migration
{
    public function up()
    {
        Schema::table('ewoutduyck_reserves_reserves', function($table)
        {
            $table->string('longitude', 191);
            $table->string('latitude', 191);
        });
    }
    
    public function down()
    {
        Schema::table('ewoutduyck_reserves_reserves', function($table)
        {
            $table->dropColumn('longitude');
            $table->dropColumn('latitude');
        });
    }
}
