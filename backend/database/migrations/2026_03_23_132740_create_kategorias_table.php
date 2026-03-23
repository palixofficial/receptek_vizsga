<?php

use App\Models\Kategoria;
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
        Schema::create('kategorias', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->timestamps();
        });

        Kategoria::create([
            "nev" => "Főétel",
        ]);

        Kategoria::create([
            "nev" => "Leves",
        ]);

        Kategoria::create([
            "nev" => "Édesség",
        ]);

        Kategoria::create([
            "nev" => "Saláta",
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategorias');
    }
};
