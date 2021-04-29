<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            // $table->boolean('validarcorreo');
            $table->string('password');
            $table->integer('celular');
            // $table->boolean('validarcelular');
            $table->boolean('acepto')->default(1);
            $table->boolean('autorizo')->default(1);
            $table->foreignId('id_pais')->constrained('pais');
            
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
}