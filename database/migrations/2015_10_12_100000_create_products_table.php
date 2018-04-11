<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('products', function (Blueprint $table) {
      $table->increments('id');
      $table->string('plu');
      $table->string('name');
      $table->text('description');
      $table->string('brand')->nullable();
      $table->integer('merchant_id')->unsigned()->default(0);
      $table->integer('purchase_qty')->nullable();
      $table->string('purchase_uom')->nullable();
      $table->integer('pack_qty')->nullable();
      $table->integer('pack_size')->nullable();
      $table->string('pack_uom')->nullable();
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
    Schema::dropIfExists('products');
  }
}
