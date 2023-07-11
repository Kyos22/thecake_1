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
        $immerse = DB::table('product')
           ->select('*')->join('category','product.id_category','=','category.id_category')->where('product.id_category','=',5)->paginate(3);
       

        

        return view('allcategories/cateproduct')->with('productsPerPage', $productsPerPage)
        ->with('name' ,$name_category)
        ->with('listcakes' ,$listcakes)
        ->with('listcakeevents' ,$listcakeevents)
        ->with('immerse', $immerse);
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

            $immerse = DB::table('product')
               ->select('*')->join('category','product.id_category','=','category.id_category')->where('product.id_category','=',5)->paginate(3);
           
        
            return view('allcategories/cateproductuser', compact('category'))->with('productsPerPage', $productsPerPage)
            ->with('name' ,$name_category)
            ->with('listcakes' ,$listcakes)
            ->with('listcakeevents' ,$listcakeevents)
            ->with('data_user', $data_user)
            ->with('immerse', $immerse);

            
            // ->with('listimg' ,$listimg);
        }
    public function detailproduct($name_product) {
       
        //hàm liên kết vs bảng photo để truy vấn ảnh 
        $listimg = DB::table('photo')->join('product', 'photo.id_product','=','product.id_product')
        ->select('*')->where('product.name_product','=', $name_product)->get();
        $firstimg = DB::table('photo')->join('product', 'photo.id_product','=','product.id_product')
        ->select('*')->where('product.name_product','=', $name_product)->where('photo.status','=',1)->first();
        $products = DB::table('product')->select('*')->where('name_product','like',$name_product)->first();
        $listcakes = DB::table('category')
            ->select('*')->where('type', 'like', '%cake%')->get();
   
        $listcakeevents = DB::table('category')
           ->select('*')->where('type', 'like', '%event%')->get();
        $immerse = DB::table('product')
           ->select('*')->join('category','product.id_category','=','category.id_category')->where('product.id_category','=',5)->paginate(3);
       

           return view('allcategories/detailproduct')->with('products', $products)
        ->with('name' ,$name_product)
        ->with('listcakes' ,$listcakes)
        ->with('listcakeevents' ,$listcakeevents)
        ->with('listimg' ,$listimg)
        ->with('firstimg',$firstimg)
        ->with('immerse', $immerse);
        ;
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
        $immerse = DB::table('product')
           ->select('*')->join('category','product.id_category','=','category.id_category')->where('product.id_category','=',5)->paginate(3);
       

           return view('allcategories/detailproductuser')->with('products', $products)
        ->with('name' ,$name_product)
        ->with('listcakes' ,$listcakes)
        ->with('listcakeevents' ,$listcakeevents)
        ->with('listimg' ,$listimg)
        ->with('data_user', $data_user)
        ->with('immerse', $immerse);
    }
    public function blog(){
    $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();
    $blogmain = DB::table('blog')
        ->select('*')->where('type','like', '%article%')->orderBy('created', 'desc')->first();
    $bloglist = DB::table('blog')
        ->select('*')->where('type','like', '%article%')->orderBy('created', 'desc')->get();

        
    return view('pages/blog')->with('listcakes' ,$listcakes)
        ->with('listcakeevents' ,$listcakeevents)->with('blogmain', $blogmain)->with('bloglist',$bloglist);
    }
    public function bloguser(){
        $listcakes = DB::table('category')
            ->select('*')->where('type', 'like', '%cake%')->get();
    
        $listcakeevents = DB::table('category')
           ->select('*')->where('type', 'like', '%event%')->get();
        $blogmain = DB::table('blog')
            ->select('*')->where('type','like', '%article%')->orderBy('created', 'desc')->first();
        $bloglist = DB::table('blog')
            ->select('*')->where('type','like', '%article%')->orderBy('created', 'desc')->get();
    
            
        return view('pages/bloguser')->with('listcakes' ,$listcakes)
            ->with('listcakeevents' ,$listcakeevents)->with('blogmain', $blogmain)->with('bloglist',$bloglist);
        }
    public function bloglist($id_blog){
    $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();
    $blogmain = DB::table('blog')
       ->select('*')->where('id_blog',$id_blog)->first();
    $bloglist = DB::table('blog')
       ->select('*')->where('type','like', '%article%')->orderBy('created', 'desc')->get();
        return view('/pages/bloglist')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents)->with('blogmain', $blogmain)->with('bloglist',$bloglist);
    }
    public function bloglistuser($id_blog){
        $listcakes = DB::table('category')
            ->select('*')->where('type', 'like', '%cake%')->get();
    
        $listcakeevents = DB::table('category')
           ->select('*')->where('type', 'like', '%event%')->get();
        $blogmain = DB::table('blog')
           ->select('*')->where('id_blog',$id_blog)->first();
        $bloglist = DB::table('blog')
           ->select('*')->where('type','like', '%article%')->orderBy('created', 'desc')->get();
            return view('/pages/bloglistuser')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents)->with('blogmain', $blogmain)->with('bloglist',$bloglist);
        }
}
