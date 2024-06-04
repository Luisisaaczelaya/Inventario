<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table='suppliers';
    protected $fulleable=['id','name','address','telephone','email','category'];

    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}
