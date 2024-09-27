<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $adminRequest = User::where('is_admin' , NULL)->get();
        $revisorRequest = User::where('is_admin' , NULL)->get();
        $writerRequest = User::where('is_writer' , NULL)->get();

        return view('admin.dashboard' , compact('adminRequest' , ' revisorRequest' , 'writerRequest'));
    }
}
