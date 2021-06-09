<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;
class AdminController extends Controller
{

    public function admin()
    {

    $staff=staff::paginate(15);
    return view('pages\admin', ['staff'=>$staff]);
    }
}
