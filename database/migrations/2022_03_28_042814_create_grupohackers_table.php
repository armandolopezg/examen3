<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\grupohacker;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupohackers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->longtext('bio_grupo');
            $table->longtext('imageng');
            $table->bigInteger('numerodemiembros');
            $table->date('fechadeinicio');
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
        Schema::dropIfExists('grupohackers');
    }
};
