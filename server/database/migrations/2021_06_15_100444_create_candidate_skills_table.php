<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_skills', function (Blueprint $table) {
            $table->id();
            $table->boolean('del_flag')->default(false);
            // $table->integer('candidate_id')->unsigned();
            // $table->integer('skill_id')->unsigned();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('modified_by')->unsigned()->nullable();
            $table->foreignId('candidate_id')->references('id')->on('candidates')->onUpdate('cascade');
            $table->foreignId('skill_id')->references('id')->on('configurations')->onUpdate('cascade');
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
        Schema::dropIfExists('candidate_skills');
    }
}
