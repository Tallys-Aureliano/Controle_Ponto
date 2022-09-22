<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Position;
use App\Models\Sector;
use App\Models\User;

class PositionController extends Controller
{
	public function show($id)
	{
		$position = Position::findOrFail($id);
		$users = User::with(['position'])->where('position_id', $id)->get();

		return view('users.admin.position.show', compact('position', 'users'));
	}

    public function list()
    {
    	$positions = Position::with(['sector'])->get();

    	return view('users.admin.position.list', compact('positions'));
    }

    public function create()
    {
    	$sectors = Sector::all();

    	return view('users.admin.position.create', compact('sectors'));
    }

    public function store(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'name' => 'required|string|unique:positions|max:191',
            'sector' => 'required|int|exists:sectors,id'
        ]);
 
        if ($validator->fails()) {
            return redirect()->route('admin.position.create')
                    ->withErrors($validator)
                    ->withInput();
        }

    	$position = Position::create([
    		'name' => $request->name,
    		'sectors_id' => $request->sector
    	])->save();

    	return redirect()->route('admin.position.list')
    		->with('success', 'Cargo adicionado com sucesso.');
    }

    public function edit($id){
    	$position = Position::findOrFail($id);
    	$sectors = Sector::all();

    	return view('users.admin.position.edit', compact('position', 'sectors'));
    }

    public function update(Request $request, $id)
    {
        $position = Position::findOrFail($id);
    	$validator = Validator::make($request->all(), [
            'name' => 'required|string|unique:positions,name,'. $position->id .'|max:191',
            'sector' => 'required|integer|exists:sectors,id',
        ]);
 
        if ($validator->fails()) {
            return redirect()->route('admin.position.edit', ['id' =>$id])
                    ->withErrors($validator)
                    ->withInput();
        }

        $position->name = $request->name;
        $position->sectors_id = $request->sector;
        $position->save();

    	return redirect()->route('admin.position.list')
    		->with('success', 'Cargo atualizado com sucesso.');
    }

    public function destroy($id)
    {
    	$position = Position::findOrFail($id);
    	$position->delete();

    	return redirect()->route('admin.position.list')
    		->with('success', 'Cargo deletado com sucesso.');
    }
}
