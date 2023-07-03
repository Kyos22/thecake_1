<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

    protected $table = 'photo';
    protected $primarykey = 'id_photo';
    public $timestamps = false; //nghĩa là trong bảng của tôi không cần thêm created at và cái 
    protected $fillable = [
        'id_product',
        'name_photo',
        
    ]; //mảng chứa tên cột
    

}