<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Busines;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class BusinessController extends Controller
{
	public function show($id){
		$business = Busines::findOrFail($id);
		$users = User::with('business')->where('business_id', $id)->get();

		return view('users.admin.business.show', compact('business', 'users')); // tem que mudar
	}

	public function showMyBusiness(){
		$business = Busines::find(auth()->user()->business_id);
		return view('users.employe.manager.show_business', compact('business'));
	}

	public function createByAdmin()
	{
		return view('users.admin.business.create');
	}

	public function storeByAdmin(Request $request)
	{
		$validator = Validator::make($request->all(), [
            'name' => 'required|string|max:45',
        ]);
 
        if ($validator->fails()) {
            return redirect('admin.business.create')
                    ->withErrors($validator)
                    ->withInput();
        }

        $business_id = Busines::create([
        	'name' => $request->name,
        ])->save();

        return redirect()->route('admin.business.list')
        	->with('success', 'Empresa criada com sucesso.');

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

	public function edit($id)
	{
		$business = Busines::findOrFail($id);

		return view('users.admin.business.edit', compact('business'));
	}

	public function update(Request $request, $id){
		$validator = Validator::make($request->all(), [
            'name' => 'required|string|max:45',
            'active' => 'required|in:0,1'
        ]);
 
        if ($validator->fails()) {
            return redirect()->route('admin.business.edit')
                    ->withErrors($validator)
                    ->withInput();
        }

        $business = Busines::findOrFail($id);
        $business->name = $request->name;
        $business->active = $request->active;
        $business->save();

        return redirect()->route('admin.business.list')
        	->with('success', 'Empresa atualizada com sucesso.');
	}

	public function list(){
		$businesss = Busines::orderBy('active', 'desc')->orderBy('created_at','desc')->get();
		return view('users.admin.business.list', compact('businesss'));
	}

	public function destroy($id)
	{
		$business = Busines::findOrFail($id);
		$business->active = false;
		$business->save();

		return redirect()->route('admin.business.list')
			->with('success', 'Empresa desativada com sucesso.');
	}

}
