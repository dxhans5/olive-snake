<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmailLists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::dropIfExists('email_lists');
      Schema::create('email_lists', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name')->index();
          $table->string('vendor_id');
          $table->string('tracking_id');
          $table->string('hoplink');
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
        Schema::dropIfExists('email_lists');
    }
}
