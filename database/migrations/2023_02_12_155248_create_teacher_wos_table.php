<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherWosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_wos', function (Blueprint $table) {
            $table->id();
            $table->string('Meeting_No');
            $table->string('Meeting_title');
            $table->string('Meeting_Description');
            $table->string('Meeting_DateTime');
            $table->string('UpMeeting_Date_Time');
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
        Schema::dropIfExists('teacher_wos');
    }
}
