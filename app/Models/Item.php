<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'item_name',
        'item_price',
    ];
    public function items(){
        return $this->belongsTo('App\Models\Invoice');
    }

}
