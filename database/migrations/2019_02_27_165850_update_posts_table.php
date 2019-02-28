<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePostsTable extends Migration
{
    //questa ci serve per aggiungere la colonna delle categories nei post per questo aggiungeremo prima una colonna vuota con unsignedInteger('cosa inserire') e poi dichiareremo la foreign key spiegando cos'è nella tabella in cui si trova
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedInteger('category_id')->after('id');
            $table->foreign('category_id')->references('id')->on('categories');
        });
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
