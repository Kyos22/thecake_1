<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {

    protected $table = 'blog';
    protected $primarykey = 'id_blog';
    public $timestamps = false; //nghĩa là trong bảng của tôi không cần thêm created at và cái 
    protected $fillable = [
        'created',
        'article',
        'content',
        'photo',
        'type'
    ]; //mảng chứa tên cột
    

}