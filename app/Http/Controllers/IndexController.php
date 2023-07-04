<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class IndexController extends Controller

{
    public function index()
    {
        // $data = [
        //     'products' => Product::get()
        // ];
        $data_session = session()->get('id_user');
        if (!$data_session) {
            $listcakes = DB::table('category')
                ->select('*')->where('type', 'like', '%cake%')->get();
            $listcakeevents = DB::table('category')
                ->select('*')->where('type', 'like', '%event%')->get();
            $topcake = DB::table('product')->select('*')->where('id_category','=', 17);
            return view('layouts.body')->with('listcakes', $listcakes)->with('listcakeevents', $listcakeevents)->with('topcake',$topcake);
            
        } elseif ($data_session) {
            $listcakes = DB::table('category')
                ->select('*')->where('type', 'like', '%cake%')->get();
            $listcakeevents = DB::table('category')
                ->select('*')->where('type', 'like', '%event%')->get();
            $topcake = DB::table('product')->select('*')->where('id_category','=', 17);
            return view('layoutsuser.bodyuser')->with('listcakes', $listcakes)->with('listcakeevents', $listcakeevents)->with('topcake',$topcake);
        }
}

public function logout_user() {

   
        Session::put('email_user',null);
        Session::put('pass_user',null);
        Session::put('id_user',null);
        return redirect('/');
    
}
}
