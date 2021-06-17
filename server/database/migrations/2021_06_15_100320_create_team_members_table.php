<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->boolean('del_flag')->default(false);
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('team_member_role');
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('modified_by')->unsigned()->nullable();
            $table->foreign('member_id')->references('id')->on('members')->onUpdate('cascade');
            $table->foreign('team_id')->references('id')->on('teams')->onUpdate('cascade');
            $table->foreign('team_member_role')->references('id')->on('configurations')->onUpdate('cascade');
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
        Schema::dropIfExists('team_members');
    }
}
