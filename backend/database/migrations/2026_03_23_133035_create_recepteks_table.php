<?php

use App\Models\Receptek;
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
        Schema::create('recepteks', function (Blueprint $table) {
            $table->id();
            $table->string("nev");
            $table->foreignId("kat_id")->constrained("kategorias");
            $table->string("kep_eleresi_ut");
            $table->string("leiras");
            $table->timestamps();
        });

        Receptek::create([
            "nev" => "Húsleves",
            "kat_id" => 2,
            "kep_eleresi_ut" => "https://kep.index.hu/1/0/5834/58342/583428/58342825_4316527_88357529035469516af531820bd893ed_wm.jpg",
            "leiras" => "Húsleves leírása"
        ]);

        Receptek::create([
            "nev" => "Rántotthús",
            "kat_id" => 1,
            "kep_eleresi_ut" => "https://nlc.hu/uploads/2021/04/rantott-hus-1920.jpg",
            "leiras" => "Rántotthus leírása"
        ]);

        Receptek::create([
            "nev" => "Saláta",
            "kat_id" => 3,
            "kep_eleresi_ut" => "https://kep.cdn.indexvas.hu/1/0/4821/48212/482123/48212366_b893a102d4b3f788baf9162f6edfec33_wm.jpg",
            "leiras" => "Saláta leírása"
        ]);

        Receptek::create([
            "nev" => "Somlói",
            "kat_id" => 1,
            "kep_eleresi_ut" => "https://www.karaidavid.hu/wp-content/uploads/2020/09/somloi-1160856.jpg",
            "leiras" => "Somlo galuska leírása"
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepteks');
    }
};
