<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $fulleable=['id','brand','name','category','batch','size',];

    public function Supplier()
    {
        return $this->hasMany(Supplier::class);
    }
}
