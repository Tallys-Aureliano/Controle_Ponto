<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sector;

class SectorController extends Controller
{
    public function list()
    {
    	$sectors = Sector::all();

    	return view('users.admin.sector.list', compact('sectors'));
    }
}
