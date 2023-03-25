<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_tbls', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('op_name')->nullable();
            $table->string('depart_from')->nullable();
            $table->string('depart_time')->nullable();
            $table->string('arrive_at')->nullable();
            $table->string('booked_seats')->nullable();
            $table->string('price')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('admin_tbls');
    }
}