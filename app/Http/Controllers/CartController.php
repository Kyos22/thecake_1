<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Password;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use App\Models\Account;
use App\Models\DetailsOrder;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;


//Khoa
class CartController extends Controller
{

    public function cart()
    {
        $cart_product = Session('id');

        $listcakes = DB::table('category')
            ->select('*')->where('type', '=', 'cake')->get();
        $listcakeevents = DB::table('category')
            ->select('*')->where('type', 'like', 'event')->get();
        $customer = Session('id_user');
        $count = DB::table('cart')->join('cart_product', 'cart_product.id_cart', '=', 'cart.id_cart')->where('cart.id_customer', $customer)->distinct()->count('cart_product.id_product');
        $cake = DB::table('product')->join('photo', 'product.id_product', '=', 'photo.id_product')->join('cart_product', 'product.id_product', '=', 'cart_product.id_product')->where('photo.status', '=', 1)->first();
        $view_cart = DB::table('product')->join('cart_product', 'product.id_product', '=', 'cart_product.id_product')->join('cart', 'cart.id_cart', '=', 'cart_product.id_cart')->where('id_customer', '=', $customer)->distinct('product.id_product')->get();
        $update_cart = DB::table('cart_product')->join('product', 'cart_product.id_product', '=', 'product.id_product')->count('cart_product.id_product');

        return view('/cart/viewcartuser')->with('listcakes', $listcakes)->with('listcakeevents', $listcakeevents)->with('viewcart', $view_cart)->with('update_cart', $update_cart)->with('count', $count);
    }

    public function addcart(Request $request, $id_product)
    {

        $customer = Session('id_user');
        $last = DB::table('cart')->select('*')->where('id_customer', '=', $customer)->count();
        if ($last < 1) {
            DB::table('cart')->insert(['id_customer' => $customer, 'datecreation' => Carbon::now('Asia/Ho_chi_Minh')]);
        }
        $home = DB::table('cart')->select('*')->orderBy('id_cart', 'DESC')->first();
        Session::put('id', $home->id_cart);
        $cart_product = Session('id');
        $quantity = $request->input('quantity');
        $options = $request->input('options');
        $cart = DB::table('cart_product')->where('id_product', '=', $id_product)->where('id_cart', '=', $cart_product) -> get() ;
        
        if ($cart -> count() == 1) {
            $quan = $cart -> first() -> quantity;
            $total = $quantity + $quan;
            DB::table('cart_product')->where('id_product', '=', $id_product)->where('id_cart', '=', $cart_product)->update(['quantity' => $total]);
        }else{
            DB::table('cart_product')->insert(['id_cart' => $cart_product, 'id_product' => $id_product,'quantity' => $quantity]);
        }
        return redirect()->back()->with('success', 'Added To Cart');
    }

    public function deletecart($id)
    {
        DB::table('cart_product')->where('id_product', $id)->delete();
        return redirect()->back();
    }

    public function minus($id)
    {
        DB::table('cart_product')->where('id_product', $id)->delete();
        return redirect()->back();
    }

    public function plus($id)
    {
        DB::table('cart_product')->where('id_product', $id)->delete();
        return redirect()->back();
    }

    public function checkout(Request $request)
    {
        $order = new Order();
        $order -> id_customer = Session::get('id_user');
        $order -> datecreation = now();
        $order -> status = 'In process';
        $order -> save();
        $product =  $request -> input('id_product');
        $price = $request -> input('price');
        $quantity = $request -> input('quantity');
        $count = count($request -> input('price'));
        $totalPrice = 0;
        for($i = 0; $i < $count; $i++ ){
            $totalPrice += ($price[$i] * $quantity[$i]); 
            $detail = new DetailsOrder();
            $detail -> id_order = $order -> id;
            $detail -> id_product = $product[$i];
            $detail -> quantity = $quantity[$i];
            $detail -> price = $price[$i];
            $detail -> save();
        }
        DB::table('order')-> where('id_order', $order->id) -> update(['total' => $totalPrice]);
        DB::table('cart_product')-> where('id_cart', Session::get('id')) -> delete();
        return redirect('cart')->with('success','YOU HAVE PAID');
}
}
    //Show quantity
//Khoa
