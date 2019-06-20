<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->boolean('active')->default(1); //si el producto esta o no activo, preguntar a Rodo, o sea si el producto esta todavia en lista
            $table->string('poster')->nullable();
            $table->integer('quantity');
            $table->integer('class')->nullable(); //esto va a servir para aplicar "9" cuando en el form el producto es: coleccionable, vintage y original, entonces impacta en la categoria HOTSTUFF
            $table->string('detail');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('subcategory_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
