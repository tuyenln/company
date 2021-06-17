<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
            $table->boolean('del_flag')->default(false);
            $table->boolean('status')->default(false);
            $table->float('evaluation')->unsigned()->nullable()->default(0);
            // $table->integer('candidate_id')->unsigned();
            // $table->integer('position_id')->unsigned();
            $table->dateTime('date');
            $table->string('note')->nullable()->default('');
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('modified_by')->unsigned()->nullable();
            $table->foreignId('candidate_id')->references('id')->on('candidates')->onUpdate('cascade');
            $table->foreignId('position_id')->references('id')->on('configurations')->onUpdate('cascade');
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
        Schema::dropIfExists('interviews');
    }
}
