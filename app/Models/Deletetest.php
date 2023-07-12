<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testdelete extends Model {

    protected $table = 'testdelete';
    protected $primarykey = 'id';
    public $timestamps = false; //nghĩa là trong bảng của tôi không cần thêm created at và cái 
    protected $fillable = [
        'name',
        
    ]; //mảng chứa tên cột
    

}