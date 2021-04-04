<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFirms extends Migration
{
    /**
     * Run the migrations.
     * Aqui migration da tabela empresas
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_firms', function (Blueprint $table) {
            $table->id();
            $table->string('companyname');
            $table->string('fantasyname');
            $table->string('avatarlogo');
            $table->string('about');
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
        Schema::dropIfExists('table_firms');
    }
}
