<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alucards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();                                                                                                                                                                                                        0;
            $table->string('name');
            $table->string('surname');
            $table->string('img');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alucards');
    }
};
