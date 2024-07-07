<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Models\PengajuanCuti;
use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRoute extends Controller
{
    public function index(){
        return view('index');
    }

    public function formCuti(){
        return view('user.pengajuanCuti');
    }
    public function blog(){
        return view('user.blog');
    }

    public function contact(){
        return view('user.contact');
    }
    public function about(){
        return view('user.about');
    }

    
}
