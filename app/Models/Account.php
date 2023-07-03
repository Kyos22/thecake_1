<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {

    protected $table = 'account';
    protected $primarykey = 'id';
    public $timestamps = false; //nghĩa là trong bảng của tôi không cần thêm created at và cái 
    protected $fillable = [
        'username',
        'password',
        'email',
        'contact',
        'role'
    ]; //mảng chứa tên cột
    

}