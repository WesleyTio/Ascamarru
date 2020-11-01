<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class route extends Model
{
    use HasFactory;

    public function locals(){

        return $this->hasMany(Local::class,'fk_routes','routes_id');

    }
}
