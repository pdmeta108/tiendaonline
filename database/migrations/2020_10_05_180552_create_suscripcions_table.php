<?php

use App\Enums\SuscripcionType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscripcions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->mediumText('descripcion');
            $table->unsignedFloat('precio');
            $table->date('fecha_vencimiento');
            $table->string('tipo')->default(SuscripcionType::Cancelado);
            $table->foreignId('producto_id')->references('codigo_producto')->on('productos')->onDelete('cascade');
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
        Schema::dropIfExists('suscripcions');
    }
}
