<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewerCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviewer_comments', function (Blueprint $table) {
            $table->id();
            $table->boolean('del_flag')->default(false);
            // $table->integer('interviewer_id')->unsigned();
            $table->text('comment');
            $table->tinyInteger('rating')->nullable()->default(1);
            $table->foreignId('interviewer_id')->references('id')->on('interviewers')->onUpdate('cascade');
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
        Schema::dropIfExists('interviewer_comments');
    }
}
