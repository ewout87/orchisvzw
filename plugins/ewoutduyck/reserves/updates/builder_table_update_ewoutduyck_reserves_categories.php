<?php namespace EwoutDuyck\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEwoutduyckReservesCategories extends Migration
{
    public function up()
    {
        Schema::table('ewoutduyck_reserves_categories', function($table)
        {
            $table->string('title', 191);
            $table->string('slug', 191);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('ewoutduyck_reserves_categories', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('slug');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
