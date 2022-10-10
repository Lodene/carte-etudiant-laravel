<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignIdRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('relation', function (Blueprint $table) { 
            $table->foreignId('user_id')->references('users')->on('id')->cascadeOnDelete();
            $table->foreignId('posts_id')->references('posts')->on('id')->cascadeOnDelete();

            // Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
