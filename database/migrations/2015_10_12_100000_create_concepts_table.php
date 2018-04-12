<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConceptsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('concepts', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('phone')->nullable();
      $table->string('address')->nullable();
      $table->string('city')->nullable();
      $table->string('state')->nullable();
      $table->string('zip')->nullable();
      $table->string('site')->nullable();
      $table->string('menu')->nullable();
      $table->string('cuisine')->nullable();
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
    Schema::dropIfExists('concepts');
  }
}
