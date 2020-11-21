<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOvertimeHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overtime_history', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->id();
            $table->unsignedBigInteger('overtime_id');
            $table->dateTime('start_time');
            $table->dateTime('finish_time')->nullable();
            $table->string('overtime_desc', 255);
            $table->double('overtime_cost', 10, 2);
            $table->timestamps();
            $table->string('update_comment', 255)->nullable();
            $table->softDeletes();
            $table->string('delete_comment', 255)->nullable();
            $table->unsignedBigInteger('modifier_user_id');

            $table->foreign('overtime_id')->references('id')->on('overtimes');
            $table->foreign('modifier_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('overtime_history');
    }
}
