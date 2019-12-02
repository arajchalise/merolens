<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role_User;
use DB;

class UsersController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $users =  User::All();
            return view('Users.index', ['users' => $users]);
        } else {
            return redirect()->route('login');
        }
    }

    public function verifyUser(User $user)
    {
        $role = DB::table('role_user')->where('id', $user->id)->update(['role_id' => 2]);
        return "Done";
    }

    public function declineUser(User $user)
    {
        $role = DB::table('role_user')->where('id', $user->id)->update(['role_id' => -1]);
        return "Done";
    }

    public function destroy($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
        return "Deleted";
    }
}
