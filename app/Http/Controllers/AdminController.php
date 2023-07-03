<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Photo;
use DateTime;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index(){
        $data = [
            'products' => Product::get()
        ];

        return view('admin/index')->with($data);
    }
    public function add() 
    {
        return view('admin/add');
    }
    public function delete($id) {
        Product::find($id)->delete();
        return redirect('/admin/delete');
    }
    public function edit($id)
    {
        $data = [
            'products' => Product::find($id)
        ];
        return view('admin/edit')->with($data);
    }
    public function update(Request $request)
    {

        $product = [
            'name_product' => $request->input('name_product'),
            'detail_product' => $request->input('details_product'),
            'price' => $request->input('price'),
            'photo' => $request->input('photo'),
            'id_category' => $request->input('id_category'),
        ];
        $id = $request->input('id');
        Product::find($id)->update($product);
        return redirect('/admin/update');
    }
    public function save(Request $request)
    {
        $photo = 'thumb1.gif';
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:1048',
        ]);
        
        if ($request->hasFile('photo')) {

            $file = $request->file('photo');
            
            $request->photo->move(public_path('images'), $file->getClientOriginalName());
            $photo = $file->getClientOriginalName();
        }

        $product = [
            'name_product' => $request->input('name_product'),
            'detail_product' => $request->input('detail_product'),
            'price' => $request->input('price'),
            'photo' => $photo,
            'id_category' => $request->input('id_category'), 
        ];
        Product::create($product);
        return redirect('/admin/showproduct');
    }
    // public function validate_add_photo(Request $request) {
    //     $request->validate([
    //         'photo.*' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:1048',
    //     ]);
    //     return view('admin/showproduct');
    // }
    public function list_category() {
        
            $list_cates = DB::table('category')->select('*')->get();

        return view ('/admin/add')->with('list_cates', $list_cates);
    }
    public function show_product() {
        $product_inner = DB::table('product')->join('category','product.id_category','=','category.id_category')->select('*')->get();
        return view('/admin/showproduct')->with('product_inner', $product_inner);
    }
    public function show_category() {
        $category_inner = DB::table('category')->select('*')->get();
        return view('/admin/showcategory')->with('category_inner', $category_inner);
    }
    

    public function addphoto() {

        return view('admin/addphoto');
    }
    public function list_product() {
            $products = DB::table('product')->select('*')->get();

            return view('admin/addphoto')->with('products', $products);
    }
    public function save_photo(Request $request)
    {
        $photo = 'thumb1.gif';
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:1048',
        ]);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            
            $request->photo->move(public_path('images'), $file->getClientOriginalName());
            $photo = $file->getClientOriginalName();
        }
        $product = [
            'id_product' => $request->input('id_product'), 
            'name_photo' => $photo,
        ];
        Photo::create($product);
        return redirect('/admin/showphoto')->with('Success!','Data Added!');
    }

    public function show_photo() {
        $photos = DB::table('photo') ->join('product','photo.id_product','=','product.id_product')->select('*')->get();
        return view ('admin/showphoto')->with('photos', $photos);
    }
    
    public function searchbykeyword(Request $request) { 
        $keyword = $request->get('keyword');
        
        $product_inner = DB::table('product')->where('name_product','like','%'.$keyword.'%')
        ->join('category','product.id_category','=','category.id_category')->get();
         
        return view ('admin/showproduct') -> with('product_inner', $product_inner);
    }
    public function searchbykeyword_categoryinshowproduct(Request $request) { 
        $keyword_category = $request->get('keyword_category');
        
        $product_inner = DB::table('product')->where('name_category','like','%'.$keyword_category.'%')
        ->join('category','product.id_category','=','category.id_category')->get();
         
        return view ('admin/showproduct') -> with('product_inner', $product_inner);
    }
    public function searchbykeyword_product_inphoto(Request $request) { 
        $keyword_product = $request->get('keyword_product');
        
        $photos = DB::table('photo')->where('name_product','like','%'.$keyword_product.'%')
        ->join('product','photo.id_product','=','product.id_product')->get();
         
        return view ('admin/showphoto') -> with('photos', $photos);
    }
    public function searchbykeyword_categoryinshowcategory(Request $request) { 
        $keyword_category = $request->get('keyword_category');
        
        $category_inner = DB::table('category')->where('name_category','like','%'.$keyword_category.'%')->get();
         
        return view ('admin/showcategory') -> with('category_inner', $category_inner);
    }
    public function add_category() {

        return view('admin/addcategory');
    }
    public function save_category(Request $request)
    {
        $photo = 'thumb1.gif';
        $request->validate([
            'avatar_category' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:1048',
        ]);
        
        if ($request->hasFile('avatar_category')) {

            $file = $request->file('avatar_category');
            
            $request->avatar_category->move(public_path('images'), $file->getClientOriginalName());
            $photo = $file->getClientOriginalName();
        }

        $product = [
            'name_category' => $request->input('name_category'),
            'avatar_category' => $photo,
            'type' => $request->input('type'),
            
        ];
        Category::create($product);
        return redirect('/admin/showcategory');
    }
    public function detail_product($id_product) {
        
        
        $product = DB::table('product')->select('*')->join('category','product.id_category','=','category.id_category')->where('product.id_product',$id_product)->first();
        $photos = DB::table('photo')->select('*')->join('product','photo.id_product','=','product.id_product')->where('product.id_product',$id_product)->get();
        
        

        return view('admin/detailproduct')->with('product', $product)->with('photos', $photos);
    }
    // public function detail_product($id_product) {     
    //     $data = [
    //         'product' => Product::find($id_product)->where('id_product','=', $id_product)->get()
    //     ];      
    //     return view ('admin/detailproduct')->with($data) ;
    // }
    public function detail_category($id_category) {
        
        
        $category = DB::table('category')->select('*')->join('product','category.id_category','=','product.id_category')->where('category.id_category',$id_category)->first(); //->join('category','product.id_category','=','category.id_category')
        $product = DB::table('product')->select('*')->join('category','category.id_category','=','product.id_category')->where('category.id_category', $id_category)->get();
        return view('admin/detailcategory')->with('category', $category)->with('product',$product);
    }
    public function delete_product ($id_product) {

    
        DB::table('product')->where('id_product',$id_product)->delete();
        return redirect('/admin/showproduct');
    }
    public function edit_product ($id_product) {

        
        return view ('admin/editproduct');
    }
    public function list_cate_ineditproduct($id_product) {
        $list_cates = DB::table('category')->select('*')->get();
        //cho nó show cả $product inner luôn
        $product = DB::table('product')->where('product.id_product', $id_product)->first();
        return view('admin/editproduct')->with('list_cates',$list_cates)->with('product',$product);
    }
    public function update_product ( Request $request) {
        
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:1048',
        ]);

        $photo = $request->input('photo');
        if ($request->hasFile('photo')) {

            $file = $request->file('photo');
            
            $request->photo->move(public_path('images'), $file->getClientOriginalName());
            $photo = $file->getClientOriginalName();
        }
        $product_inner = [
            'name_product' => $request->input('name_product'),
            'detail_product' => $request->input('detail_product'),
            'price' => $request->input('price'),
            'photo' =>  $photo , // != là so sánh, nếu null thì true không nue thì false
            'id_category' => $request->input('id_category')
        ];
  
        $id_product = $request->input('id_product');
        Product::find($id_product)->update($product_inner);

        
//        DB::table('product')->where('product.id_product', $id)->update($product_inner);
        
        return view ('admin/showproduct');
    }
}
?>
