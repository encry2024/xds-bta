<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('items', function (Blueprint $table) {
         $table->increments('id');
         $table->bigInteger('project_id')->unsigned();
         $table->string('category');
         $table->string('sub_category');
         $table->string('item_type');
         $table->string('description')->nullable();
         $table->string('item');
         $table->integer('quantity')->nullable();
         $table->string('unit')->nullable();
         $table->string('price')->nullable();
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
      Schema::dropIfExists('items');
   }
}
