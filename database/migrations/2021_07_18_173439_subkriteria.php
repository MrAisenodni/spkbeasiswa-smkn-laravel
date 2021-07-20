<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subkriteria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Migrasi Tabel Subkriteria
        Schema::create('subkriteria', function (Blueprint $table) {
            $table->id('id_subkriteria');
            $table->bigInteger('id_kriteria');
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
        // Drop Tabel Subkriteria
        Schema::dropIfExists('subkriteria');
    }
}
