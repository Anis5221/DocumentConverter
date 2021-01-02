<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index(){

        $userdata = User::all();

        return view('adminpanel.usersdetailes', compact('userdata'));
    }

    public function view_user($id){

        $st = DB::table('users')->where('id', $id)->first();
        $st_details = DB::table('products')->where('user_id', $id)->get();


        return view('adminpanel.singluser', compact('st','st_details'));
    }
}
