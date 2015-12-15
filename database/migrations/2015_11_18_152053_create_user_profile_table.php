<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile', function (Blueprint $table) {
            $table->increments('id');
            $table ->integer('user_id');
            $table->string('name');
            $table->string('gender');
            $table->date('birth');
            $table->string('address');
            $table->string('phone_number');
            $table->string('collage');
            $table->string('collage_type');
            $table->string('github');
            $table->text('intern');
            $table->text('hackathon');
            $table->text('work');
            $table->json('tech');
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
        Schema::drop('user_profile');
    }
}
