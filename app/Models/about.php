<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    protected $fillable = ['subtitle', 'birthdate', 'website', 'phone','city', 'age', 'degree','email', 'freelance', 'src','subtext'];

    public function avatar(){
        return $this->hasOne(Avatar::class);
    }
}
