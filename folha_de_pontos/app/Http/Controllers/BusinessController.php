<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Busines;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class BusinessController extends Controller
{
	public function show($id){
		$role = auth()->user()->role;

		return view('dashboard'); // tem que mudar
	}

	public function showMyBusiness(){
		$business = Busines::find(auth()->user()->business_id);
		return view('users.employe.manager.show_business', compact('business'));
	}
    
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
        ]);
 
        if ($validator->fails()) {
            return redirect('business.create')
                    ->withErrors($validator)
                    ->withInput();
        }

        $business_id = Busines::create([
        	'name' => $request->name,
        ])->id;

        $user = User::find(auth()->user()->id);
        $user->business_id = $business_id;
        $user->save();

        return redirect()->route('dashboard');

	}

	public function editMyBusiness(){
		$business = Busines::find(auth()->user()->business_id);
		return view('users.employe.manager.edit_business', compact('business'));
	}

	public function updateMyBusiness(Request $request){
		$business_id = auth()->user()->business_id;
		if (!$business_id){
			return redirect()->route('manager.business.create')
				->with('info', 'Você deve cadastrar uma empresa para continuar.');
		}

		$validator = Validator::make($request->all(), [
            'name' => 'required|string|max:45',
        ]);
 
        if ($validator->fails()) {
            return redirect()->route('manager.edit.business')
                    ->withErrors($validator)
                    ->withInput();
        }

        $business = Busines::find($business_id);
        $business->name = $request->name;
        $business->save();

        return redirect()->route('manager.show.business')
        	->with('success', 'Empresa atualizada com sucesso.');
	}

}
