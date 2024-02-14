<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function Medecins()
    {
        return $this->hasMany(Medecin::class);
    }
}
