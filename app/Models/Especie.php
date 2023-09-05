<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    use HasFactory;
    protected $table = "especie";

    protected $fillable = [
        'id',
        'tipo',        
    ];

    public function Animal()
    {
        return $this-> hasMany(Animals::class);
    }
}
