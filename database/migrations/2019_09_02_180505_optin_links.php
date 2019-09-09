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
      Schema::dropIfExists('optin_links');
      Schema::create('optin_links', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('funnel_id')->index();
          $table->string('iframe');
          $table->string('page_title');
          $table->timestamp('created_at')->nullable();
          $table->timestamp('updated_at')->nullable();

          $table->foreign('funnel_id')->references('id')->on('funnels');
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
