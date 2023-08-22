<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
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
            $table->string('emp_code')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('designation')->nullable();
            $table->string('dept_id')->nullable();
            $table->string('dept_name')->nullable();
            $table->string('hod')->nullable();
            $table->string('location')->nullable();
            $table->string('branch_id')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('emp_status')->nullable();
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
