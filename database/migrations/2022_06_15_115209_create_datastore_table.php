<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatastoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datastore', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('base_path')->nullable();
            $table->string('directory_name')->nullable();
            $table->string('directory_status')->default('unlock')->nullable();
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
        Schema::dropIfExists('datastore');
    }
}
