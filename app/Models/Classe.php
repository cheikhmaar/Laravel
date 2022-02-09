<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = ['libelleClasse'];

    protected $table ='classes';

    public function eleves()
    {
        return $this->hasMany(Eleve::class);
    }
}
