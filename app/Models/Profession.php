<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;
    public function degreetypes(){
        return $this->belongsToMany(Degree_type::class, 'profession_degrees');
    }
}
