<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Migrasi Tabel Siswa
        Schema::create('siswa', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->string('nim', 10)->unique();
            $table->string('nama', 100);
            $table->string('email')->unique();
            $table->string('no_hp', 13)->unique();
            $table->longText('alamat');
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
        // Drop Tabel Siswa
        Schema::dropIfExists('siswa');
    }
}
