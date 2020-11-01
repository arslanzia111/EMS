<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->Integer('allowLeave');
            $table->Integer('grossSalary');
            $table->unsignedBigInteger('departmentId');
            $table->foreign('departmentId')->references('id')->on('departments');
            $table->unsignedBigInteger('employeeId');
            $table->foreign('employeeId')->references('id')->on('employees');
            $table->unsignedBigInteger('designationId');
            $table->foreign('designationId')->references('id')->on('designations');
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
        Schema::dropIfExists('contracts');
    }
}
