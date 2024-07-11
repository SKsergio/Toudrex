<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('users_id');//creamos el campo de la llave foranea

            // procedemos a crear las resticciones junto a la llave foranea
            $table->foreignId('users_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('cover_photo_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('profile_photo_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('profiles');
        Schema::enableForeignKeyConstraints();
    }
};

/*The add foreign key of this way isn't well, but we create another migration where we add the constraint with all tables alterations */