<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('parentname');
            $table->string('relationship');
            $table->string('occupation');
            $table->string('address');
            $table->bigInteger('phone');
            $table->string('email');
            $table->string('state');
            $table->string('school');
            $table->string('studentname');
            $table->string('gender');
            $table->string('class');
            $table->date('dob');
            $table->string('previousclass')->nullable();
            $table->string('previousschool')->nullable();
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
        Schema::dropIfExists('admissions');
    }
}
