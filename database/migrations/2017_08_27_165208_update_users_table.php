<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('full_name')->nullable();
            $table->string('course')->nullable();
            $table->string('school')->nullable();
            $table->integer('year')->nullable();
            $table->text('motivation')->nullable();
            $table->text('expectations')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('id_no')->nullable();
            $table->integer('is_admin')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
