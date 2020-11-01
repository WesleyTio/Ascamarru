<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class itemSale extends Model
{
    use HasFactory;

    public function type_materials(){
        return $this->hasMany(typeMaterial::class, 'type_material_id','fk_type_material');
    }

    public function sales(){
        return $this->hasMany(sale::class, 'sales_id','fk_sales');
    }
}
