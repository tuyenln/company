<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->boolean('del_flag')->default(false);
            $table->string('name', 100);
            // $table->string('leader')->unsigned();
            $table->string('description')->nullable()->default('');
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('modified_by')->unsigned()->nullable();
            $table->foreignId('leader')->references('id')->on('members')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
