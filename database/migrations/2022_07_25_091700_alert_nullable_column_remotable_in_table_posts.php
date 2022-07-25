<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlertNullableColumnRemotableInTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            if(Schema::hasColumn('posts', 'remotable')){
                $table->string('remotable')->nullable()->change();
            }
            if(Schema::hasColumn('posts', 'is_parttime')){
                $table->string('is_parttime')->nullable()->change();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table_posts', function (Blueprint $table) {
            //
        });
    }
}
