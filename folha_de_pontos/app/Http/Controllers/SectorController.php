<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Sector;
use App\Models\Position;


class SectorController extends Controller
{
	public function show($id)
	{
		$sector = Sector::findOrFail($id);
		$positions = Position::where('sectors_id', $id)->get();

		return view('users.admin.sector.show', compact('sector', 'positions'));
	}

    public function list()
    {
    	$sectors = Sector::all();

    	return view('users.admin.sector.list', compact('sectors'));
    }

    public function create()
    {
    	return view('users.admin.sector.create');
    }

    public function store(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191|unique:sectors',
        ]);
 
        if ($validator->fails()) {
            return redirect()->route('admin.sector.create')
                    ->withErrors($validator)
                    ->withInput();
        }

        $sector = Sector::create([
        	'name' => $request->name
        ])->save();

        return redirect()->route('admin.sector.list')
        	->with('success', 'Setor criado com sucesso.');

    }

    public function edit($id)
    {
    	$sector = Sector::findOrFail($id);

    	return view('users.admin.sector.edit', compact('sector'));
    }

    public function update(Request $request, $id)
    {
    	$validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191|unique:sectors',
        ]);
 
        if ($validator->fails()) {
            return redirect()->route('admin.sector.edit', ['id' => $id])
                    ->withErrors($validator)
                    ->withInput();
        }

        $sector = Sector::findOrFail($id);
        $sector->name = $request->name;
        $sector->save();

        return redirect()->route('admin.sector.list')
        	->with('success', 'Setor criado com sucesso.');

    }

    public function destroy($id)
    {
        $sector = Sector::findOrFail($id);

        $sector->delete();

        return redirect()->route('admin.sector.list')
            ->with('success', 'Setor removido com sucesso.');
    }

}
