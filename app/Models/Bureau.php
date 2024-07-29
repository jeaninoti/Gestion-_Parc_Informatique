<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bureau extends Model
{
    use HasFactory;

       
    protected $fillable = [
        'numero',
        'niveau_id',
      
    ];

    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }

    public function equipements()
    {
        return $this->hasMany(Equipement::class);
    }


 

}
