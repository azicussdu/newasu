<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree_type extends Model
{
    use HasFactory;

    public function professions(){
        return $this->belongsToMany(Profession::class, 'profession_degrees');
    }
}
