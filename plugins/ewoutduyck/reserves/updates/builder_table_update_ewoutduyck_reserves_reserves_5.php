<?php namespace EwoutDuyck\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEwoutduyckReservesReserves5 extends Migration
{
    public function up()
    {
        Schema::table('ewoutduyck_reserves_reserves', function($table)
        {
            $table->text('description_html');
        });
    }
    
    public function down()
    {
        Schema::table('ewoutduyck_reserves_reserves', function($table)
        {
            $table->dropColumn('description_html');
        });
    }
}
