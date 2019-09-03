<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OptinLinks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('optin_links', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('email_list_id')->index();
          $table->string('iframe');
          $table->timestamp('created_at')->nullable();
          $table->timestamp('updated_at')->nullable();

          $table->foreign('email_list_id')->references('id')->on('email_lists');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('optin_links');
    }
}
