<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->unique();
            $table->text('reduction');
            $table->boolean('free')->default(false);
            $table->integer('level')->default(5);
            $table->date('updated_at');
            $table->date('created_at');
            $table->unsignedBigInteger('entreprises_id');
            $table->unsignedBigInteger('category_id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('posts');
        
    }
}
