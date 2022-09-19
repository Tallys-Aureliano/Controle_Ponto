<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Busines;

class BusinessController extends Controller
{
    
	public function create()
	{
		return view('users.employe.manager.create_business')
	}

	public function store()
	{

	}

}
