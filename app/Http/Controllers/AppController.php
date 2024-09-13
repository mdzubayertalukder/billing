<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserListy;
use Illuminate\support\facades\DB;

class AppController extends Controller
{
    public function index(){

        return view('dashboard');
    }
   
    public function addclient(){

        return view('client.addclient');
    }
   
    public function manageParties(){

        return view('client.manageParties');
    }
    public function gstbill(){

        return view('client.gstbill');
    }
    public function managebills(){

        return view('client.managebills');
    }
   
    public function print(){

        return view('client.print');
    }
   
}
