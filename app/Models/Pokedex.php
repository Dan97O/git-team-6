<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokedex extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'gif', 'description', 'type_1', 'type_2', 'hp', 'attack', 'defense', 'speed', 'special'];

    protected $table = 'pokemon';
}
