<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    use HasFactory;

    public function pack()
    {
        return $this->belongsTo(Pack::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
