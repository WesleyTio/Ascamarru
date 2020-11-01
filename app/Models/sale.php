<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    use HasFactory;

    public function item_sales(){
        return $this->belongsTo(itemSale::class, 'sales_id','fk_sales');
    }
}
