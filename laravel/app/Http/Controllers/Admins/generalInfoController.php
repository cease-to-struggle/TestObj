<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use stdClass;

class GeneralInfoController extends Controller
{
	//public $

    public function index()
    {
        return view('admins.index');
    }


}
