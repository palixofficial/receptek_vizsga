<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['nev', 'kat_id', 'kep_eleresi_ut', 'leiras'])]


class Receptek extends Model
{
    /** @use HasFactory<\Database\Factories\ReceptekFactory> */
    use HasFactory;
}
