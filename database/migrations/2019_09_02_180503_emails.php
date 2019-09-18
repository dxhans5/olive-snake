<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Emails extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::dropIfExists('emails');
    Schema::create('emails', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('name')->index();
        $table->text('body');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::dropIfExists('emails');
  }
}
