<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
    ];
    
    public function bureaux()
    {
        return $this->hasMany(Bureau::class);
    }
}
