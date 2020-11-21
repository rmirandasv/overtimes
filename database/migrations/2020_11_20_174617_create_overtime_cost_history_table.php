<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOvertimeCostHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overtime_cost_history', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->id();
            $table->unsignedBigInteger('overtime_cost_id');
            $table->integer('initial_minute');
            $table->integer('final_minute');
            $table->double('cost', 10, 2);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('modifier_user_id');

            $table->foreign('overtime_cost_id')->references('id')->on('overtime_costs');
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
        Schema::dropIfExists('overtime_cost_history');
    }
}
