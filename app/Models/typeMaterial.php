<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeMaterial extends Model
{
    use HasFactory;

    public function item_sales(){
        return $this->belongsTo(itemSale::class, 'type_material_id','fk_type_material');
    }
}
