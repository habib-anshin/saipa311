<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRolePermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hastable('tbl_permissionRole')) {
            Schema::create('tbl_permissionRole', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('role_id')->length(10)->unsigned();
                $table->integer('permission_id')->length(10)->unsigned();
                $table->timestamps();

                $table->foreign('role_id')
                    ->references('id')->on('tbl_roles')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

                $table->foreign('permission_id')
                    ->references('id')->on('tbl_permissions')
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
        Schema::dropIfExists('tbl_permissionRole');
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
