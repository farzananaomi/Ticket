<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name')->default('')->nullable();
            $table->string('email')->default('')->nullable();
            $table->integer('designation_id')->default(0)->nullable();
            $table->integer('sub_centre_id')->default(0)->nullable();
            $table->string('username')->nullable();
            $table->enum('role', ['super', 'admin', 'user'])->default('admin')->nullable();
            $table->string('contact')->default('')->nullable();
            $table->string('additional_no')->default('')->nullable();
            $table->string('address')->default('')->nullable();

            $table->string('password')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
