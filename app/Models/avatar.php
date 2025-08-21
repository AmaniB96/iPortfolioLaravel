<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avatar extends Model
{
    protected $fillable = ['image', 'about_id'];

    public function about(){
        return $this->belongsTo(Avatar::class);
    }
}
