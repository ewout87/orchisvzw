<?php namespace EwoutDuyck\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEwoutduyckReservesReserves6 extends Migration
{
    public function up()
    {
        Schema::table('ewoutduyck_reserves_reserves', function($table)
        {
            $table->text('content');
            $table->text('content_html');
            $table->dropColumn('description');
            $table->dropColumn('description_html');
        });
    }
    
    public function down()
    {
        Schema::table('ewoutduyck_reserves_reserves', function($table)
        {
            $table->dropColumn('content');
            $table->dropColumn('content_html');
            $table->text('description');
            $table->text('description_html');
        });
    }
}
