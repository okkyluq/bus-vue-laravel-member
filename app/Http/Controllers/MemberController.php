<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member; 

class MemberController extends Controller
{
    public function data_member(Request $request)
    {
    	$data = Member::where('nama', 'LIKE', '%'.$request->keyword.'%')->paginate(5);
    	return response()->json($data);
    }
}
