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

    // public function user()
    // {
    //     $id = session()->get('id_user');
    //     $data_user = DB::table('account')->select('*')->where('id_account', $id)->get();
    //     return view('/user/user')->with('data_user', $data_user);
    // }
    //c
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

    //             $id = session()->get('id_user');
    //             $listcakes = DB::table('category')
    //                 ->select('*')->where('type', 'like', '%cake%')->get();

    //             $listcakeevents = DB::table('category')
    //                 ->select('*')->where('type', 'like', '%event%')->get();
    //             return view('/layoutsuser/bodyuser')->with('listcakes', $listcakes)->with('listcakeevents', $listcakeevents);
    //         } else {
    //             return redirect('/login/login');
    //         }
    //     } else {
    //         return redirect('/login/login');
    //     }
    //     if ($data_admin && Hash::check($password_session, $data_admin->password)) {
    //         $data_account = DB::select('select id_account from account where email = ? and role = ?', [$email_session, 'admin']);
    //         if ($data_account) {
    //             $request->Session()->put('email_admin', $email_session);
    //             $request->Session()->put('pass_admin', $password_session);
    //             $username = session('username');
    //             return redirect('admin.admin');
    //         } else {
    //             return redirect('/login');
    //         }
    //     } else {
    //         return redirect('/login');
    //     }
    // }
    public function check_session(Request $request) {
        $email = $request -> email;
        $password = md5($request -> password);
        
        $user_data = DB::table('account')->where('email',$email)->where('password',$password)->where('role','user')->first();
        $admin_data = DB::table('account')->where('email',$email)->where('password',$password)->where('role','admin')->first();
        if($user_data) {
            Session::put('username',$user_data->username);
            Session::put('id',$user_data->id_account);
            return redirect('/');
        } else if ($admin_data) {
            Session::put('username',$admin_data->username);
            Session::put('id',$admin_data->id_account);
            return redirect('admin');

        }else {
            Session::put('message', 'ấn lại');
            return redirect('/login/login');
        }
    }

    //c
    //K  
    //c
    public function admin()
    {
        if (!session('email_admin') and !session('pass_admin')) {
            return view('admin/admin');
        } else {
            return view('admin/admin');
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


        // $account = [
        //     'username' => $request->input('username_account'),
        //     'password' => Hash::make($request->input('password_account')),
        //     // 'password' => md5($request->input('password_account')),
        //     'email' => $request->input('email_account'),
        //     'contact' => 'nullable',
        //     'role' => 'user'
        // ];
        // Account::create($account);

        // return redirect('login/login');

        $request->validate(['username_account'=>'required|unique:account,username','email_account'=>'required|unique:account,email|email','password_account'=>'min:6']);
        $task = new Account();
        $task->username = $request -> username_account;
        $task->password = md5($request -> password_account);
        $task->email = $request -> email_account;
        $task->contact = $request -> nullable;
        $task->role = 'user';
        $task->save();
        $users = Account::all();
        
        return redirect()->back();
    }
    public function log_out()
    {
        Session::put('email_user', null);
        Session::put('pass_user', null);
        return redirect('login');
    }



    //c
}
