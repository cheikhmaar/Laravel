<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'classe_id'];

    protected $table = 'eleves';

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

}
