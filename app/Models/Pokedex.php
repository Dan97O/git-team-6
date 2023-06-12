<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pokedex extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'gif', 'description', 'type_1', 'type_2', 'hp', 'attack', 'defense', 'speed', 'special', 'region_id'];

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }
    protected $table = 'pokemons';

}
