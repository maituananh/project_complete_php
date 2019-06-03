<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class UsersController extends Controller
{
    public function CheckLogin(Request $request) {
        try {
            $checkLogin = DB::table('users')
            ->where('username', '=', $request->username, 'and', 'password', '=', $request->password)
            ->get();
            foreach($checkLogin as $kt)
            {
                if($kt->roles != "") {
                    $request->session()->put('id_users', $kt->id_users);
                    $request->session()->put('username', $kt->username);
                    $request->session()->put('roles', $kt->roles); 
                    return redirect('/home');
                    break;
                }
            }
            $mess = "Wrong account or password";
            Session::flash('sai', $mess);
            return redirect('/login');
        }catch(\Exception $e) {
            echo $e;
        }
    }

    public function LogOut(Request $request) {
        $request->session()->flush();
        return view('page.logout');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        
        $checkUser = DB::table('users')
        ->where('username', '=', $request->username)
        ->count();
        //echo $checkUser;
        if($checkUser >= 1) {
            $mess = "Account name already in use";
            Session::flash('Account', $mess);
            return redirect('/registration');
        } else {
            if($request->password == $request->AgainPassword) {
                if($request->name != "" && $request->address != "" && $request->birthday != "" && $request->username != "" && $request->password != "" && $request->email != "") {
                        try {
                        $insertUser = DB::table('users')
                        ->insert([
                            'Name' => $request->name,
                            'birthday' => $request->birthday,
                            'address' => $request->address,
                            'username' => $request->username,
                            'password' => $request->password,
                            'email' => $request->email,
                            'roles' => 0,
                            'ngayTao' => $dt->toDateString(),
                            'gioTao' => $dt->toTimeString() , 
                            'ngaySua' => $dt->toDateString(),
                            'gioSua' => $dt->toTimeString()  
                        ]);
                        $mess = "Registration success";
                        Session::flash('success', $mess);
                        return redirect('/login');
                    } catch(\Exception $e) {
                        echo $e;
                    }
                }else {
                    $mess = "Please enter enough information";
                    Session::flash('Please', $mess);
                    return redirect('/registration');
                }
            } else {
                $mess = "Please enter password";
                Session::flash('password', $mess);
                return redirect('/registration');
            }
        } 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
