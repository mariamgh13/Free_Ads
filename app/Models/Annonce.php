<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = ['title', 'desc', 'picture', 'picture2', 'picture3', 'price', 'create_by'];
    public function picture()
    {
        return $this->hasMany(Picture::class);
    }
}
