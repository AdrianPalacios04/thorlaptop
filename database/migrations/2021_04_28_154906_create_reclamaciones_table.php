<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamaciones', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_tienda');
            $table->string('monto',3);
            $table->string('descripcion');
            $table->string('tipo_reclamo');
            $table->string('pedido');
            $table->string('detalle_reclamo');
            $table->foreignId('id_users')->constrained('users');
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
        Schema::dropIfExists('reclamaciones');
    }
}