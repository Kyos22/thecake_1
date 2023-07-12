<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $table = 'order';
    protected $primarykey = 'id_order';
    public $timestamps = false; //nghĩa là trong bảng của tôi không cần thêm created at và cái 
    protected $fillable = [
        'id_customer',
        'datecreation',
        'status',
        'total'
    ]; //mảng chứa tên cột
    

}