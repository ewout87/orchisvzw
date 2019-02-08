<?php namespace EwoutDuyck\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEwoutduyckReservesReserves2 extends Migration
{
    public function up()
    {
        Schema::table('ewoutduyck_reserves_reserves', function($table)
        {
            $table->text('description');
            $table->text('manager');
            $table->string('excerpt', 191);
            $table->text('address');
            $table->text('location');
        });
    }
    
    public function down()
    {
        Schema::table('ewoutduyck_reserves_reserves', function($table)
        {
            $table->dropColumn('description');
            $table->dropColumn('manager');
            $table->dropColumn('excerpt');
            $table->dropColumn('address');
            $table->dropColumn('location');
        });
    }
}
