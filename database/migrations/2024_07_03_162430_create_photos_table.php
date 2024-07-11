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
        // Type photo table
        Schema::create('type_photos', function(Blueprint $table){
            $table->string('id')->primary();
            $table->string('name_photo');
        });

        Schema::create('shared_photos', function (Blueprint $table) {
            $table->id();
            $table->string('id_type_photo');//create the columm
            //assign the constraint
            $table->foreign('id_type_photo')->references('id')->on('type_photos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('photo', length:1000);
            $table->foreignId('profile_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

        Schema::create('cover_photos', function(Blueprint $table){
            $table->id();
            $table->foreignId('shared_photo_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('profile_photos', function(Blueprint $table){
            $table->id();
            $table->foreignId('shared_photo_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints(); //todos estos metodos seran borrados cuando ya este toda la bd lista 
        Schema::dropIfExists('profile_photos');
        Schema::dropIfExists('cover_photos');
        Schema::dropIfExists('shared_photos');
        Schema::dropIfExists('type_photos');
        Schema::enableForeignKeyConstraints();
    }
};
