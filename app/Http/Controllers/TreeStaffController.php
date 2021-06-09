<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;
class TreeStaffController extends Controller
{

    public function index()
    {
        $chief = staff::whereNull('parent_id')
            ->with('childrenstaff')
            ->get();
        return view('pages\index',compact('chief'));
    }
}
