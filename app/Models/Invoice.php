<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public function customers(){
        return $this->hasMany('App\Models\Customer');
    }
    public function items(){
        return $this->hasMany('App\Models\Item');
    }
}
