<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsInProjectsTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::table('projects', function (Blueprint $table) {
         $table->string('name')->after('id')->unique();
         $table->string('subject')->after('name');
         $table->string('location')->after('subject');
         $table->date('project_date');
      });
   }

   /**
   * Reverse the migrations.
   *
   * @return void
   */
   public function down()
   {
      Schema::table('projects', function (Blueprint $table) {
         //
      });
   }
}
