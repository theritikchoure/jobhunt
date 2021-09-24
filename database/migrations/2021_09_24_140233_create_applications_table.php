<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->integer('student_id')->unsigned();

            $table->integer('internship_id')->unsigned();

            $table->foreign('student_id')->references('id')->on('students')

                ->onDelete('cascade');

            $table->foreign('internship_id')->references('id')->on('internships')

                ->onDelete('cascade');

            $table->integer('status')->default(1);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
