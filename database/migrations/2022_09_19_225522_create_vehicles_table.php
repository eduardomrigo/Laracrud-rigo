<?php

//criamos uma migration para criar as colunas do nosso banco
//php artisan make:migration create_xxx_table
//php artisan make:migration add_xx_to_table
//seguir sempre as convencoes do Laravel

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
    public function up() //nessa funcao eh onde adicionaremos coisas ao banco
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();

            $table->string('marca')->nullable();
            $table->string('modelo');
            $table->integer('ano');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //remove coisas do banco
    {
        Schema::dropIfExists('vehicles');
    }
};

//sempre apos mexer nas migrations, rodar o php artisan migrate para alinhar as novas atualizacoes com o banco, 
//e sempre criar novas migrations se for alterar algo para ter esse controle de versoes