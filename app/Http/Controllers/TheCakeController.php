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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;




class TheCakeController extends Controller
{
    //C
    public function login()
    {
        $listcakes = DB::table('category')
            ->select('*')->where('type', 'like', '%cake%')->get();

        $listcakeevents = DB::table('category')
            ->select('*')->where('type', 'like', '%event%')->get();

        return view('login/login')->with('listcakes', $listcakes)
            ->with('listcakeevents', $listcakeevents);
    }
    //C
    //Khoa
    public function home()
    {

        return view('layouts/body');
    }

    public function user()
    {
        $id = session()->get('id_user');
        $data_user = DB::table('account')->select('*')->where('id_account', $id)->get();

        $listcakes = DB::table('category')
                ->select('*')->where('type', 'like', '%cake%')->get();
            $listcakeevents = DB::table('category')
                ->select('*')->where('type', 'like', '%event%')->get();
        return view('/user/user')->with('data_user', $data_user)->with('listcakes', $listcakes)->with('listcakeevents', $listcakeevents);

    }
    
    public function check_session(Request $request)
{

    $request->validate([
        'password' => 'required|min:7',
        
    ]);

    $email_session = $request->input('email');
    $password_session = $request->input('password');
    $username_session = $request->input('username');
    $data_user = DB::table('account')->select('*')->where('email', $email_session)->first();
    $data_admin = DB::table('account')->select('*')->where('email', $email_session)->first();
    
    
    if ($data_user && Hash::check($password_session, $data_user->password)) {
        $data_account = DB::select('select id_account from account where email = ? and role = ?', [$email_session, 'user']);
        if ($data_account) {
            // $request->session()->put('email_user', $email_session);
            // $request->session()->put('pass_user', $password_session);
            // $request->session()->put('username_user', $username_session);
            Session::put('email_user',$email_session);
            Session::put('pass_user',$password_session);
            Session::put('id_user',$data_user->id_account);
            Session::put('username',$data_user->username);
            return redirect('/'); 
        } 
    elseif ($data_admin && Hash::check($password_session, $data_admin->password)) {
        $data_account = DB::select('select id_account from account where email = ? and role = ?', [$email_session, 'admin']);
        if ($data_account) {
            Session::put('email_admin',$email_session);
            Session::put('pass_admin',$password_session);
            Session::put('id_admin',$data_admin->id_account);
            Session::put('name_admin',$data_admin->username);
            return redirect('/admin');
        } 
    } else {
        return redirect('/login');
    }

}
}
    // public function check_session(Request $request)
    // {

    //     $email_session = $request->input('email');
    //     $password_session = $request->input('password');
    //     $username_session = $request->input('username');
    //     $data_user = DB::table('account')->select('*')->where('email', $email_session)->first();
    //     $data_admin = DB::table('account')->select('*')->where('email', $email_session)->first();

    //     if ($data_user && Hash::check($password_session, $data_user->password)) {
    //         $data_account = DB::select('select id_account from account where email = ? and role = ?', [$email_session, 'user']);
    //         if ($data_account) {
        
    //             Session::put('email_user', $email_session);
    //             Session::put('pass_user', $password_session);
    //             Session::put('id_user', $data_user->id_account);
    //             Session::put('username', $data_user->username);

                
               
    //             return redirect('/');
    //         } else {
    //             return redirect('/login');
    //         }
    //   }
    //     elseif ($data_admin && Hash::check($password_session, $data_admin->password)) {
    //         $data_account = DB::select('select id_account from account where email = ? and role = ?', [$email_session, 'admin']);
    //         if ($data_account) {
    //             $request->Session()->put('email_admin', $email_session);
    //             $request->Session()->put('pass_admin', $password_session);
    //             $username = session('username');
    //             return redirect('admin.admin');
    //         } else {
    //             return redirect('/admin/showproduct');
    //         }
    //     } else {
    //         return redirect('/login/login');
    //     }
    // }
    // public function check_session(Request $request) {
    //     $email = $request -> email;
    //     $password = md5($request -> password);
        
    //     $user_data = DB::table('account')->where('email',$email)->where('password',$password)->where('role','user')->first();
    //     $admin_data = DB::table('account')->where('email',$email)->where('password',$password)->where('role','admin')->first();
    //     if($user_data) {
    //         Session::put('username',$user_data->username);
    //         Session::put('id',$user_data->id_account);
    //         return redirect('/');
    //     } else if ($admin_data) {
    //         Session::put('username',$admin_data->username);
    //         Session::put('id',$admin_data->id_account);
    //         return redirect('admin');

    //     }else {
    //         Session::put('message', 'ấn lại');
    //         return redirect('/login/login');
    //     }
    // }

    //c
    //K  
    //c
    public function admin()
    {
        // if (!session('email_admin') and !session('pass_admin')) {
        //     return view('admin/admin');
        // } else {
        //     return view('admin/admin');
        // }
        $data_session = session()->get('id_admin');
        if (!$data_session) {
            
            return redirect('/login');
            
        } elseif ($data_session) {
            $id = session()->get('id_admin');
            $data_admin = DB::table('account')->select('*')->where('id_account',$id)->get();
            
            return view('/admin/admin')->with('data_admin', $data_admin);
        }
    }
    //c hiển thị admin để chỉnh sửa

    //c
    public function users()
    {
        if (!session('email_user') and !session('pass_user')) {
            return view('login/login');
        } else {

            // $lists = DB::table('account')->select('username') ->get();
            return view('user/user');
        }
    }

    //c
    //c
    public function register()
    {
        $listcakes = DB::table('category')
            ->select('*')->where('type', 'like', '%cake%')->get();

        $listcakeevents = DB::table('category')
            ->select('*')->where('type', 'like', '%event%')->get();


        return view('/register/register')->with('listcakes', $listcakes)
            ->with('listcakeevents', $listcakeevents);
    }
    //c
    //c
    public function save_account(Request $request)
    {
        

        $account = [
            'username' => $request->input('username_account'),
            'password' => Hash::make($request->input('password_account')),
            // 'password' => md5($request->input('password_account')),
            'email' => $request->input('email_account'),
            'contact' => 'nullable',
            'role' => 'user'
        ];
        Account::create($account);

        return redirect('/login');

        // $request->validate(['username_account'=>'required|unique:account,username','email_account'=>'required|unique:account,email|email','password_account'=>'min:6']);
        // $task = new Accounat();
        // $task->username = $request -> username_account;
        // $task->password = md5($request -> password_account);
        // $task->email = $request -> email_account;
        // $task->contact = $request -> nullable;
        // $task->role = 'user';
        // $task->save();
        // $users = Account::all();
        
        // return redirect()->back();
    }
    public function aboutus() {
        $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();

        return view ('pages/aboutus')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents);
    }
    public function aboutususer() {
        $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();

        return view ('pages/aboutususer')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents);
    }
    public function news() {
        $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();
       $bloglist = DB::table('blog')
       ->select('*')->where('type','like', '%article%')->orderBy('created', 'desc')->get();

        return view ('pages/news')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents)->with('bloglist',$bloglist);
    }
    public function newsuser() {
        $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();
       $bloglist = DB::table('blog')
       ->select('*')->where('type','like', '%article%')->orderBy('created', 'desc')->get();

        return view ('pages/news')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents)->with('bloglist',$bloglist);
    }
    public function collectionlist() {
        $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();
      
        return view ('pages/collectionlist')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents);
    }
    public function collectionlistuser() {
        $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();
      
        return view ('pages/collectionlistuser')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents);
    }
    public function faq() {
        $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();
      
        return view ('pages/faq')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents);
    }
    public function faquser() {
        $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();
      
        return view ('pages/faquser')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents);
    }
    public function contact () {
        $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();
        return view ('pages/contact')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents);
    }
    public function contactuser () {
        $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();
        return view ('pages/contactuser')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents);
    }
    public function postcontact(Request $request) {
        $data_session = session()->get('id_user');
            if(!$data_session) {
                Mail::send('email.contact', [
                    'name' => $request -> name,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'detail' => $request -> description
                ], function ($mail) use($request){
                    $mail-> to('nguyenthanhcongvt123@gmail.com');
                    $mail ->from($request ->email);
                    $mail->subject('contact form');
                });
                session() -> flash('success','completely sent contact ');
                return redirect('/pages/contact');
            }elseif($data_session) {
                Mail::send('email.contact', [
                    'name' => $request -> name,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'detail' => $request -> description
                ], function ($mail) use($request){
                    $mail-> to('nguyenthanhcongvt123@gmail.com');
                    $mail ->from($request ->email);
                    $mail->subject('contact form');
                });
                session() -> flash('success','completely sent contact ');
                return redirect('/pages/contactuser');
            }

    }
    public function shippingpage() {
        $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();
        return view('pages/shippingpage')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents);
    }
    public function shippingpageuser() {
        $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();
        return view('pages/shippingpageuser')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents);
    }
    public function privacy() {
        $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();
        return view('pages/privacy')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents);
    }
    public function privacyuser() {
        $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();
        return view('pages/privacyuser')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents);
    }
    public function term() {
        $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();
        return view('pages/privacy')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents);
    }
    public function termuser() {
        $listcakes = DB::table('category')
        ->select('*')->where('type', 'like', '%cake%')->get();

    $listcakeevents = DB::table('category')
       ->select('*')->where('type', 'like', '%event%')->get();
        return view('pages/termuser')->with('listcakes' ,$listcakes)->with('listcakeevents' ,$listcakeevents);
    }
    //c
}
