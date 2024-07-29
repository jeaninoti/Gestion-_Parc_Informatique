<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    use HasFactory;

    public function bureau()
    {
        return $this->belongsTo(Bureau::class);
    }
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }
    
}
