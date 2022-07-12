<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlertAddIsPinnedColumnToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        if (!Schema::hasColumn('post', 'is_pinned')) {
//            Schema::table('post', function (Blueprint $table) {
//                $table->boolean('is_pinned')->default(false)->after('status');
//            });
//        }
//
//        if (!Schema::hasColumn('post', 'is_pinned')) {
//            Schema::table('post', function (Blueprint $table) {
//                $table->dropColumn('is_pinned');
//            });
//        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
