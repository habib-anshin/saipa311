<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hastable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('role_id_user' )->length(10)->unsigned();

                $table->string('name');
                $table->string('email')->unique();
                $table->string('mobile')->unique()->nullable();
                $table->string('password');
                $table->string('api_token', 60)->unique()->nullable();
                $table->string('activationCode')->nullable();
                $table->boolean('state');
                $table->rememberToken();
                $table->timestamps();

                $table->foreign('role_id_user')
                    ->references('id')->on('tbl_roles')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('users');
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
