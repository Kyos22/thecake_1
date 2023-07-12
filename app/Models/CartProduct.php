<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    use HasFactory;
    protected $table = 'cart_product';
    protected $primarykey = 'id_product';
    public $timestamps = false;
    protected $fillable = [
        'id_cart',
        'id_option',
        'quantity'
    ]; 
}
