<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'category';
    protected $primarykey = 'id_category';
    public $timestamps = false; //nghĩa là trong bảng của tôi không cần thêm created at và cái 
    protected $fillable = [
        'name_category',
        'avatar_category',
        'type'
    ]; //mảng chứa tên cột
    

}