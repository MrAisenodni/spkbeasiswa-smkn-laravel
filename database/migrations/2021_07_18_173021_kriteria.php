<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kriteria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Migrasi Tabel Kriteria
        Schema::create('kriteria', function (Blueprint $table) {
            $table->id('id_kriteria');
            $table->string('kd_kriteria', 4);
            $table->string('nama', 100);
            $table->float('bobot', 5, 2);
            $table->datetime('created_at')->nullable();
            $table->string('created_by')->nullable();
            $table->datetime('updated_at')->nullable();
            $table->string('updated_by')->nullable();
            $table->datetime('deleted_at')->nullable();
            $table->string('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop Tabel Kriteria
        Schema::dropIfExists('kriteria');
    }
}
