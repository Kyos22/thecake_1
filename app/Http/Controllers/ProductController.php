<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Validation\ValidatesRequests;


class BaseController extends Controller
{
    protected function getProductQuery() {
        return DB::table('product')
            ->select('product.id_product', 'name_product', 'detail_product', 'price', 'photo',)
            ->join('category', 'category.id_product', '=', 'product.id_product');
    }
}
class ProductController extends BaseController
{
    

    public function list_category() {
        $listcakes = DB::table('category')
         ->select('*')->where('type', 'like', '%cake%')->get();

        $listcakeevents = DB::table('category')
        ->select('*')->where('type', 'like', '%event%')->get();

        return view('layouts/body')->with('listcakes', $listcakes)->with('listcakeevents', $listcakeevents);


    }
    //hàm trang category
    public function cateProduct($name_category) {

    //    hàm liên kết vs bảng photo để truy vấn ảnh 
    //     $listimg = DB::table('photo')->join('product', 'photo.id_product','=','product.id_product')
    //     ->select('*')->where('product.name_product')->get();


        $productsPerPage = DB::table('product')// biến lấy từng sản phẩm 
            ->join('category','product.id_category','=','category.id_category')
            ->select('*')
            ->where('category.name_category','=',$name_category) ->get();
            
        $listcakes = DB::table('category')// biến sổ danh sách category
            ->select('*')->where('type', 'like', '%cake%')->get();
   
        $listcakeevents = DB::table('category')// biến sổ danh sách category bánh event
           ->select('*')->where('type', 'like', '%event%')->get();

        return view('allcategories/cateproduct')->with('productsPerPage', $productsPerPage)
        ->with('name' ,$name_category)
        ->with('listcakes' ,$listcakes)
        ->with('listcakeevents' ,$listcakeevents)
        ;
        // ->with('listimg' ,$listimg);
    }
    public function cateProductuser($name_category) {

        //    hàm liên kết vs bảng photo để truy vấn ảnh 
        //     $listimg = DB::table('photo')->join('product', 'photo.id_product','=','product.id_product')
        //     ->select('*')->where('product.name_product')->get();
    
            $id = session()->get('id_user');
            $data_user = DB::table('account')->select('*')->where('id_account', $id)->get();

            $category = DB::table('category')->select('*')->where('name_category', $name_category)->get(); //biến lấy các sản phẩm trong category
    
            $productsPerPage = DB::table('product')// biến lấy từng sản phẩm 
                ->join('category','product.id_category','=','category.id_category')
                ->select('*')
                ->where('category.name_category','=',$name_category) ->get();
                
            $listcakes = DB::table('category')// biến sổ danh sách category
                ->select('*')->where('type', 'like', '%cake%')->get();
       
            $listcakeevents = DB::table('category')// biến sổ danh sách category bánh event
               ->select('*')->where('type', 'like', '%event%')->get();
    
            return view('allcategories/cateproductuser', compact('category'))->with('productsPerPage', $productsPerPage)
            ->with('name' ,$name_category)
            ->with('listcakes' ,$listcakes)
            ->with('listcakeevents' ,$listcakeevents)
            ->with('data_user', $data_user);
            
            // ->with('listimg' ,$listimg);
        }
    public function detailproduct($name_product) {
       
        //hàm liên kết vs bảng photo để truy vấn ảnh 
        $listimg = DB::table('photo')->join('product', 'photo.id_product','=','product.id_product')
        ->select('*')->where('product.name_product','=', $name_product)->get();

        $products = DB::table('product')->select('*')->where('name_product','like',$name_product)->first();
        $listcakes = DB::table('category')
            ->select('*')->where('type', 'like', '%cake%')->get();
   
        $listcakeevents = DB::table('category')
           ->select('*')->where('type', 'like', '%event%')->get();

           return view('allcategories/detailproduct')->with('products', $products)
        ->with('name' ,$name_product)
        ->with('listcakes' ,$listcakes)
        ->with('listcakeevents' ,$listcakeevents)
        ->with('listimg' ,$listimg);
    }
    public function detailproductuser($name_product) {
        $id = session()->get('id_user');
        $data_user = DB::table('account')->select('*')->where('id_account', $id)->get();
        //hàm liên kết vs bảng photo để truy vấn ảnh 
        $listimg = DB::table('photo')->join('product', 'photo.id_product','=','product.id_product')
        ->select('*')->where('product.name_product','=', $name_product)->get();

        $products = DB::table('product')->select('*')->where('name_product','like',$name_product)->first();
        $listcakes = DB::table('category')
            ->select('*')->where('type', 'like', '%cake%')->get();
   
        $listcakeevents = DB::table('category')
           ->select('*')->where('type', 'like', '%event%')->get();

           return view('allcategories/detailproductuser')->with('products', $products)
        ->with('name' ,$name_product)
        ->with('listcakes' ,$listcakes)
        ->with('listcakeevents' ,$listcakeevents)
        ->with('listimg' ,$listimg)
        ->with('data_user', $data_user);
    }
//     public function sort_by(Request $request, $id_category) {
//         $filterdash = $request -> input('filterdash');
//         switch ($filterdash) {
//             case '1':
//                 $productsPerPage = DB::table('product')->orderBy('product.name_product', 'DESC')->paginate(25);
//                 break;
//             case '2':
//                 $productsPerPage = DB::table('product')->orderBy('product.name_product', 'ASC')->paginate(25);
//                 break;
//             case '3':
//                 $productsPerPage = DB::table('product')->orderBy('product.price', 'DESC')->paginate(25);
//                 break;
//             case '4':
//                 $productsPerPage = DB::table('product')->orderBy('product.price', 'ASC')->paginate(25);
//                 break;
           
//     }
//     return view ('/allcategories/cateproductuser')->with('productsPerPage'. $productsPerPage);
// }

}
