<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); 
            $table->text('alamat');
            $table->string('nombortelefon');
            $table->string('nomboric');
            $table->string('nomborpelajar');
            $table->string('bidang');
            $table->date('tarikhmula');
            $table->date('tarikhtamat');
            $table->string('penempatan');
            $table->string('email');
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
        Schema::dropIfExists('student');
    }
}
