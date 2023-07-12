<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailsOrder extends Model {

    protected $table = 'detailsorder';
    protected $primarykey = 'id_order';
    public $timestamps = false; //nghĩa là trong bảng của tôi không cần thêm created at và cái 
    protected $fillable = [
        'id_product',
        'quantity',
        'price'
    ]; //mảng chứa tên cột
    

}