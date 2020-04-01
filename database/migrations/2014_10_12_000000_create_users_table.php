<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('login_id',20)->unique();
            $table->string('password');
            $table->string('family_name');
            $table->string('first_name');
            $table->string('email')->unique();
            $table->string('sex')->unique();
            $table->timestamp('birth_day');
            $table->timestamp('join_date')->nullable();
            $table->unsignedInteger('campany_id');
            $table->unsignedInteger('worker_id');
            $table->unsignedInteger('office_id');
            $table->unsignedInteger('department_id');
            $table->unsignedInteger('section_id');
            $table->unsignedInteger('group_id');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
