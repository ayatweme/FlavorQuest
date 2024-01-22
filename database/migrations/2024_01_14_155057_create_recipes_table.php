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
   // In your migration file for the 'recipes' table
public function up()
{
    Schema::create('recipes', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->integer('preparation_time');
        $table->integer('serving');
        $table->json('ingredients'); // Use JSON column type for arrays
        $table->json('instructions'); // Use JSON column type for arrays
        $table->string('calories')->nullable();
        $table->string('total_fat')->nullable();
        $table->string('saturated_fat')->nullable();
        $table->string('cholesterol')->nullable();
        $table->string('sodium')->nullable();
        $table->string('potassium')->nullable();
        $table->string('total_carbohydrate')->nullable();
        $table->string('sugars')->nullable();
        $table->string('protein')->nullable();
        $table->foreignId('categoryId')->constrained(); // Assuming you have a categories table
        $table->foreignId('userId')->constrained(); // Assuming you have a users table
        $table->string('image')->nullable();
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
