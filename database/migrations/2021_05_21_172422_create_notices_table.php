<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->id();

            $table->string('name_notice');
            $table->text('description');
            $table->string('resume');
            $table->string('journalist');
            $table->string('img'); // Imagen se puede cambiar no se como ni en que tipo de datos se guarda
            $table->date('date');
            $table->time('time');
            $table->string('category');
            $table->boolean('visible')->nullable(false);

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
        Schema::dropIfExists('notices');
    }
}
