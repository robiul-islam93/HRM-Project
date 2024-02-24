<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employesController extends Controller
{

public function employeadd(){
    return view('backend.pages.employe_add');
}

   public function employelist(){
    return view('backend.pages.employe_list');
   }
}
