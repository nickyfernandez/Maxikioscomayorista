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

      Schema::create('categorys', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name',100)->nullable();
          $table->timestamps();
      });

      Schema::create('subcategorys', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('name',100)->nullable();
        $table->unsignedBigInteger('id_category')->nullable();
        $table->foreign('id_category')->references('id')->on('categorys');
        $table->timestamps();
      });

        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->bigIncrements('id_sigma');
            $table->string('name', 200)->nullable();
            $table->unsignedBigInteger('id_category')->nullable();
            $table->foreign('id_category')->references('id')->on('categorys');
            $table->unsignedBigInteger('id_subcategory')->nullable();
            $table->foreign('id_subcategory')->references('id')->on('subcategorys');
            $table->integer('stock');
            $table->decimal('price', 8 , 2)->nullable();
            $table->integer('local_id');
            $table->string('avatar', 300);
            $table->string('descripcion', 500);

            // $table->foreign('local_id')->references('id')->on('locals');


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
        Schema::dropIfExists('products');
        Schema::dropIfExists('categorys');
        Schema::dropIfExists('subcategorys');
    }
}
