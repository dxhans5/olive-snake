<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Funnels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::dropIfExists('funnels');
      Schema::create('funnels', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name')->index();
          $table->unsignedBigInteger('stage_1_email_id')->index()->nullable();
          $table->unsignedBigInteger('stage_2_email_id')->index()->nullable();
          $table->unsignedBigInteger('stage_3_email_id')->index()->nullable();
          $table->unsignedBigInteger('stage_4_email_id')->index()->nullable();
          $table->timestamp('created_at')->nullable();
          $table->timestamp('updated_at')->nullable();

          $table->foreign('stage_1_email_id')->references('id')->on('emails');
          $table->foreign('stage_2_email_id')->references('id')->on('emails');
          $table->foreign('stage_3_email_id')->references('id')->on('emails');
          $table->foreign('stage_4_email_id')->references('id')->on('emails');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funnels');
    }
}
