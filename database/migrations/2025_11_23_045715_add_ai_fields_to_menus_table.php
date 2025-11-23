<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('menus', function (Blueprint $table) {
        $table->text('ai_description')->nullable();
        $table->integer('ai_calories')->nullable();
        $table->string('ai_category')->nullable();
        $table->json('ai_recipe_steps')->nullable();
    });
}

public function down()
{
    Schema::table('menus', function (Blueprint $table) {
        $table->dropColumn(['ai_description', 'ai_calories', 'ai_category', 'ai_recipe_steps']);
    });
}

};
