<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    use HasFactory;
    //permite acessar item que foi vendido que tenha o mesmo id da data
    public function typeMaterials(){
        return $this->belongsToMany(typeMaterial::class, 'item_sales','fk_sales','fk_type_material')->withPivot('value')->using(itemSale::class);
    }
}
