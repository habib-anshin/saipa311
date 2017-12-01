<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hastable('tbl_roles')) {
            Schema::create('tbl_roles', function (Blueprint $table) {
                $table->increments('id');
                $table->string('roSubject');
                $table->text('roDescription');
                $table->timestamps();

                $table->integer('permission_id_role')->length(10)->nullable();;
                $table->foreign('permission_id_role')->references('id')->on('tbl_permissions')
                    ->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('tbl_roles');
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
