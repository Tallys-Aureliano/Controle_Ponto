<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Position;

class PositionController extends Controller
{
    public function list()
    {
    	$positions = Position::with(['sector'])->get();

    	return view('users.admin.position.list', compact('positions'));
    }
}
