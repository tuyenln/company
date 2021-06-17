<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviewers', function (Blueprint $table) {
            $table->id();
            $table->boolean('del_flag')->default(false);
            // $table->integer('interview_id')->unsigned();
            // $table->integer('member_id')->unsigned();
            $table->float('evaluation')->unsigned()->nullable()->default(0);
            $table->string('note')->nullable()->default('');
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('modified_by')->unsigned()->nullable();
            $table->foreignId('interview_id')->references('id')->on('interviews')->onUpdate('cascade');
            $table->foreignId('member_id')->references('id')->on('members')->onUpdate('cascade');
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
        Schema::dropIfExists('interviewers');
    }
}
