<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Busines;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class BusinessController extends Controller
{
    
	public function create()
	{
		$business_id = auth()->user()->business_id;
		if ($business_id){
			return redirect()->route('dashboard');
		}
		return view('users.employe.manager.create_business');
	}

	public function store(Request $request)
	{
		$business_id = auth()->user()->business_id;
		if ($business_id){
			return redirect()->route('dashboard')
				->with('danger', 'Você já possui uma empresa.');
		}

		$validator = Validator::make($request->all(), [
            'name' => 'required|string|max:45',
            'cnpj' => 'required|string|unique:business|max:22',
        ]);
 
        if ($validator->fails()) {
            return redirect('business.create')
                    ->withErrors($validator)
                    ->withInput();
        }

        $business_id = Busines::create([
        	'name' => $request->name,
    		'cnpj' => $request->cnpj,
        ])->id;

        $user = User::find(auth()->user()->id);
        $user->business_id = $business_id;
        $user->save();

        return redirect()->route('dashboard');

	}

}
