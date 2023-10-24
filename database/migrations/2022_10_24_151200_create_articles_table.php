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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->Text('titre');
            $table->Text('aperçue');
            $table->Text('titre_p1')->nullable();
            $table->Text('p1');
            $table->Text('titre_p2')->nullable();
            $table->Text('p2')->nullable();
            $table->Text('titre_p3')->nullable();
            $table->Text('p3')->nullable();
            $table->string('titre_im1');
            $table->string('im1');
            $table->string('titre_im2')->nullable();
            $table->string('im2')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('categorie_id')->constrained();
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
        Schema::dropIfExists('articles');
    }
};
