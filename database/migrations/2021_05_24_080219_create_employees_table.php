<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->binary('photo');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('contacts');
            $table->enum('gender',['male','female']);
            $table->string('address');
            $table->date('birthday');
            $table->string('designation');
            $table->integer('rate');
            $table->unsignedBigInteger('department_id')->index();
            $table->foreign('department_id')->references('id')->on('departments');
            $table->unsignedBigInteger('sss_id')->index();
            $table->foreign('sss_id')->references('id')->on('deductions');
            $table->unsignedBigInteger('ph_id')->index();
            $table->foreign('ph_id')->references('id')->on('deductions');
            $table->unsignedBigInteger('pi_id')->index();
            $table->foreign('pi_id')->references('id')->on('deductions');
            $table->unsignedBigInteger('tax_id')->index();
            $table->foreign('tax_id')->references('id')->on('deductions');
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
        Schema::dropIfExists('employees');
    }
}
