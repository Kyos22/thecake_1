<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $data_session = session()->get('id_user');
        if(!$data_session) {
            return view('layouts/body');
        }elseif($data_session){
            return view('layoutsuser/bodyuser');
        }

    }
}
