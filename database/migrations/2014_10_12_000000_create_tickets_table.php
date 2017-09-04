<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->default(0)->nullable();
            $table->integer('sub_centre_id')->default(0)->nullable();
            $table->integer('pop_id')->default(0)->nullable();
            $table->date('request_date')->nullable();
            $table->string('work_dscription')->nullable();

            $table->tinyInteger('approval_status')->default(2)->nullable();
            $table->integer('approval_id')->default(0)->nullable();
            $table->date('approve_date')->nullable();
            $table->date('last_day_to_return')->nullable();

            $table->dateTime('received_date')->nullable();
            $table->integer('received_by')->default(0)->nullable();
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
        Schema::dropIfExists('tickets');
    }
}
