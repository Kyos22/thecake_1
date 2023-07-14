<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'product';
    protected $primarykey = 'id_product';
    public $timestamps = false; //nghĩa là trong bảng của tôi không cần thêm created at và cái 
    protected $fillable = [
        'position',
        'name_product',
        'detail_product',
        'price',
        'photo',
        'id_category',
        'fakeprice',
        'status'
    ]; //mảng chứa tên cột
    

}