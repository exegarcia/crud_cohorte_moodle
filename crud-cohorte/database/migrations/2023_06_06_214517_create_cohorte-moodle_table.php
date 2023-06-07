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
        Schema::create('cohorte-moodle', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cohorteid')->nullable();
            $table->string('name');
            $table->string('idnumber');
            $table->integer('visible')->unsigned()->nullable();

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
        Schema::dropIfExists('cohorte-moodle');
    }
};
