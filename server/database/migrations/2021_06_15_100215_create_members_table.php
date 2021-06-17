<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->boolean('del_flag')->default(false);
            $table->string('username', 50)->unique();
            $table->string('password');
            $table->string('fullname', 100);
            $table->string('is_male');
            $table->date('birthday')->nullable();
            $table->string('email', 100);
            $table->string('phone', 12)->nullable();
            $table->string('picture')->nullable()->default('avatar_default.jpg');
            // $table->integer('access_level')->unsigned();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('modified_by')->unsigned()->nullable();
            $table->foreignId('access_level')->references('id')->on('configurations')->onUpdate('cascade'); // nếu id trong configurations thay đổi sẽ tự động update access_level trong bảng members
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
        Schema::dropIfExists('members');
    }
}
