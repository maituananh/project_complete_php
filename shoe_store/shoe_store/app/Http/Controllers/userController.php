<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\user;
use DateTime;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Exceptions\JWTException;
use PHPUnit\Framework\Error\Error;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\roleController;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class userController extends Controller
{
    public function ListUserspage(Request $request) {
        if ($request->session()->has('username') == "" || $request->session()->has('username') != 'admin') {
            return view('pages.errorLogin');
        } else {
            return view('pages.listUsers');
        }
    }

    public function listUsers()
    {
        return user::orderBy('id')->get();
    }

    public function addUser(Request $request)
    {
        $User = new user;
        $User->name = $request->name;
        $User->email = $request->email;
        $User->address = $request->address;
        $User->password = $request->password;
        $User->city = $request->city;
        $User->updated_at = new DateTime();
        $User->created_at = new DateTime();
        $User->save();
        return "ok add user";
    }

    public function Check_User(Request $request)
    {
        $User = new user;
        $User->name = $request->name;
        $User->password = $request->password;
        $query = DB::table('users')
            ->where([
                ['name', '=', $User->name],
                ['password', '=', $User->password]
            ])->count();

        // kiểm tra usname gửi lên và lưu vào ss
        if ($query == 1) {
            //$user = App\User::find(1);
            try {
                //$token = null;
                $UsernameSS = $request->session()->put('username', $User->name);
                $PassSS = $request->session()->put('pass', $User->password);
                //$token = $user->createToken($UsernameSS, $PassSS)->accessToken;
                if ($request->session()->has('username') && $request->session()->has('pass')) {
                    return 1;
                } else {
                    return 0;
                }
            } catch (Exception $e) {
                return "Error" + $e;
            }
        } else {
            return 0;
        }
    }

    public function logout(Request $request)
    {
        // xóa tất cả ss
        try {
            $request->session()->flush();
            if (!$request->session()->has('name')) {
                return Redirect('/');
            } else {
                return Redirect('ErrorLogin');
            }
        } catch (Exception $e) {
            return "Error" + $e;
        }
    }

    public function deleteUser($id)
    {
        $User = new user;
        $query = DB::table('users')->where('id', '=', $id)->delete();
        if ($query) {
            return 1;
        } else {
            return 0;
        }
    }
}