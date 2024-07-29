<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;


    
    protected $fillable = [
        'nom',
      
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function equipements()
    {
        return $this->hasMany(Equipement::class);
    }
    
    
}
