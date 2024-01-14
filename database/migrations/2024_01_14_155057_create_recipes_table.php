<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
       
Schema::create('recipes', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description');
    $table->integer('preparation_time');
    $table->integer('serving');
    $table->json('ingredients');
    $table->json('instructions');
    $table->string('calories')->nullable();
    $table->string('total_fat')->nullable();
    $table->string('saturated_fat')->nullable();
    $table->string('cholesterol')->nullable();
    $table->string('sodium')->nullable();
    $table->string('potassium')->nullable();
    $table->string('total_carbohydrate')->nullable();
    $table->string('sugars')->nullable();
    $table->string('protein')->nullable();
    $table->unsignedBigInteger('categoryId'); // Foreign key for category
    $table->foreign('categoryId')->references('id')->on('categories');
    $table->unsignedBigInteger('userId'); // Foreign key for user
    $table->foreign('userId')->references('id')->on('users');
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
        Schema::dropIfExists('recipes');
    }
}
