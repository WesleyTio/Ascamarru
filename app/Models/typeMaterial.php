<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeMaterial extends Model
{
    use HasFactory;
    //permite acessar item que foi vendido que tenha o mesmo id  do tipo de material
    public function sales(){
        return $this->belongsToMany(sale::class,'item_sales','fk_type_material','fk_sales')->using(itemSale::class);
    }
}
