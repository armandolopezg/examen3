<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\perfilhacker;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfilhackers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('edad');
            $table->longText('bio');
            $table->unsignedBigInteger('datos_hackers_id');
            $table->foreign('datos_hackers_id')->references('id')->on('datos_hackers')->onDelete('cascade');
            $table->unsignedBigInteger('grupo_id');
            $table->foreign('grupo_id')->references('id')->on('grupohackers')->onDelete('cascade');
            $table->longText('imagen');
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
        Schema::dropIfExists('perfilhackers');
    }
};
