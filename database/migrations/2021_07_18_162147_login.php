<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Login extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Migrasi Tabel Login
        Schema::create('login', function (Blueprint $table) {
            $table->id('id_login');
            $table->string('username', 18);
            $table->string('password');
            $table->rememberToken();
            $table->enum('akses', ['usr', 'adm']);
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
        // Drop Tabel Login
        Schema::dropIfExists('login');
    }
}
