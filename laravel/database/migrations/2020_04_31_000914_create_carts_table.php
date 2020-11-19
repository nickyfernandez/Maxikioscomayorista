<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('users', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('id_kind');
          $table->foreign('id_kind')->references('id')->on('kindusers');
          $table->unsignedBigInteger('id_client');
          $table->foreign('id_client')->references('id')->on('clients');
          $table->string('name')->nullable();
          $table->string('email')->unique();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password');
          $table->string('avatar',400);
          $table->integer('isadmin');
          $table->rememberToken();
          $table->timestamps();
      });

        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            // $table->string('email', 200)->nullable();
            $table->unsignedBigInteger('id_product')->nullable();
            $table->foreign('id_product')->references('id')->on('products');
            $table->decimal('price', 8 , 2)->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('buyit');
            $table->integer('deleteit');
            $table->string('avatar', 300);

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
        Schema::dropIfExists('carts');
        Schema::dropIfExists('users');
    }
}
