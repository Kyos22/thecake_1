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
            //$listcake cái sổ ra danh sách bánh thường trong cate
            $listcakes = DB::table('category')
                ->select('*')->where('type', 'like', '%cake%')->get();
            //$listcakeevents cái sổ ra danh sách bánh event trong cate
            $listcakeevents = DB::table('category')
                ->select('*')->where('type', 'like', '%event%')->get();
            //$topcake cái sổ ra ultimateguide trong homepage
            $topcake = DB::table('product')
                ->select('*')->join('category','product.id_category','=','category.id_category')->where('product.id_category','=', 4)->get();
            //$getthegoodness cái sổ ra get the goodness trong homepage
            $getthegoodness = DB::table('product')
                ->select('*')->join('category','product.id_category','=','category.id_category')->where('product.id_category','=', 6)->get();
            //$lessegg cái sổ ra less egg trong homepage
            $lessegg = DB::table('product')
                ->select('*')->join('category','product.id_category','=','category.id_category')->where('product.id_category','=', 5)->get();
            //$slidehome cái sổ ra slide chính lên xuống ngay đầu homepage trong homepage
            $slidehome = DB::table('product')
            ->select('*')->join('category','product.id_category','=','category.id_category')->where('product.id_category','=',5)->paginate(3);
            $immerse = DB::table('product')
            ->select('*')->join('category','product.id_category','=','category.id_category')->where('product.id_category','=',5)->paginate(3);
            $bloglist = DB::table('blog')
            ->select('*')->where('type','like', '%article%')->orderBy('created', 'desc')->get();

            
            return view('layouts.body')->with('listcakes', $listcakes)->with('listcakeevents', $listcakeevents)->with('topcake',$topcake)->with('getthegoodness',$getthegoodness)->with('lessegg',$lessegg)->with('slidehome',$slidehome)
            ->with('bloglist', $bloglist);
            
        } elseif ($data_session) {
            $listcakes = DB::table('category')
                ->select('*')->where('type', 'like', '%cake%')->get();
            $listcakeevents = DB::table('category')
                ->select('*')->where('type', 'like', '%event%')->get();
            $topcake = DB::table('product')->select('*')->join('category','product.id_category','=','category.id_category')
                ->where('product.id_category','=', 4)->get();
            $getthegoodness = DB::table('product')
                ->select('*')->join('category','product.id_category','=','category.id_category')->where('product.id_category','=', 6)->get();
            $lessegg = DB::table('product')
                ->select('*')->join('category','product.id_category','=','category.id_category')->where('product.id_category','=', 5)->get();
            $slidehome = DB::table('product')
                ->select('*')->join('category','product.id_category','=','category.id_category')->where('product.id_category','=',5)->paginate(3);
            $immerse = DB::table('product')
                ->select('*')->join('category','product.id_category','=','category.id_category')->where('product.id_category','=',5)->paginate(3);
            $bloglist = DB::table('blog')
            ->select('*')->where('type','like', '%article%')->orderBy('created', 'desc')->get();

            return view('layoutsuser.bodyuser')->with('listcakes', $listcakes)->with('listcakeevents', $listcakeevents)->with('topcake',$topcake)->with('getthegoodness',$getthegoodness)->with('lessegg',$lessegg)->with('slidehome',$slidehome)
            ->with('bloglist', $bloglist);
        }
}

public function logout_user() {

   
        Session::put('email_user',null);
        Session::put('pass_user',null);
        Session::put('id_user',null);

        
        return redirect('/');

    
}
public function logout_admin() {

   
        Session::put('email_admin',null);
        Session::put('pass_admin',null);
        Session::put('id_admin',null);
        Session::put('name_admin',null);
        return redirect('/');

    
}

}
