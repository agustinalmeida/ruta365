<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('sucursal_id');
            $table->char('tipo');
            $table->string('imagen');
            $table->text('descripcion');
            $table->timestamps();
            $table->softDeletes();
            //$table->boolean('enabled')->default(true)->index();
            $table->auditable();
        });

        /*Schema::create('SINGULAR_NAME_translations', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('foreign_id')->unsigned(); //Cambiar por id
            $table->string('locale')->index();

            //$table->string('name')->unique();

            $table->unique(['foreign_id','locale']);
        });*/         

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('materiales');
        //Schema::drop('SINGULAR_NAME_translations'); //Cambiar por nombre de tabla
    }
}
