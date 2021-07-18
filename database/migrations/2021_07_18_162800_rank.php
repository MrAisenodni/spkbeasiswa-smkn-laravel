<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rank extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Migrasi Tabel Rank
        Schema::create('rank', function (Blueprint $table) {
            $table->id('id_rank');
            $table->bigInt('id_siswa');
            $table->float('penghasilan', 5, 2);
            $table->float('kepemilikan', 5, 2);
            $table->float('kondisi', 5, 2);
            $table->float('anggota', 5, 2);
            $table->float('kendaraan', 5, 2);
            $table->float('kebutuhan', 5, 2);
            $table->float('pembayaran', 5, 2);
            $table->float('jarak', 5, 2);
            $table->float('total', 5, 2);
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
