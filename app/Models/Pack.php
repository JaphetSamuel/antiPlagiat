<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;

    public function prix()
    {
        return $this->value * (int) env('PRIX_DU_MOT');
    }
}
