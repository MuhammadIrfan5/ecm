<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('file_original_name');
            $table->string('file_unique_name');
            $table->string('file_extension');
            $table->string('file_size');
            $table->string('file_path');
            $table->unsignedBigInteger('file_type_id');
            $table->timestamps();
            $table->foreign('file_type_id')->references('id')->on('filetype')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
