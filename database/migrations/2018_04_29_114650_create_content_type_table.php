<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_type', function (Blueprint $table) {
            $table->integer('content_id')->unsigned()->index();
            $table->foreign('content_id')->references('id')->on('types')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('type_id')->unsigned()->index();
            $table->foreign('type_id')->references('id')->on('contents')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_type');
    }
}
