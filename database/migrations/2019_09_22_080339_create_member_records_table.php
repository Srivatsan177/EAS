<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('uid');
            $table->unsignedBigInteger('team_head_id');
            $table->unsignedBigInteger('team_id');
            $table->foreign('uid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('team_head_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('team_id')->references('team_id')->on('teams')->onDelete('cascade');
            $table->string('task');
            $table->string('comment');
            $table->integer('rating');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
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
        Schema::dropIfExists('member_records');
    }
}
