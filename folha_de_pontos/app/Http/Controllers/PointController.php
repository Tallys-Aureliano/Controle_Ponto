<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\PointRegister as Point;
use App\Models\User;

class PointController extends Controller
{
    public function list()
    {
    	$points = Point::with(['users'])->get();

    	return view('users.admin.point.list', compact('points'));
    }

    public function show($id)
    {
    	$point = Point::with(['users'])->findOrFail($id);

    	return view('users.admin.point.show', compact('point'));
    }

    public function edit($id)
    {
    	$point = Point::with(['users'])->findOrFail($id);

    	return view('users.admin.point.edit', compact('point'));
    }

    public function create()
    {
    	$users = User::all();
    	return view('users.admin.point.create', compact('users'));
    }

    public function store(Request $request)
    {
    	$validator = Validator::make($request->all(), [
    		'entry_time' => 'date_format:H:i:s|required',
    		'exit_time' => 'date_format:H:i:s|nullable',
    		'date' => 'date|required',
    		'user' => 'integer|exists:users,id|required'
    	]);

    	if ($validator->fails()) {
            return redirect()->route('admin.point.create')
                    ->withErrors($validator)
                    ->withInput();
        }

        $point = Point::create([
        	'entry_time' => $request->entry_time,
        	'exit_time' => $request->exit_time,
        	'date' => $request->date,
        	'users_id' => $request->user,
        ])->save();

    	return redirect()->route('admin.point.list')
    		->with('success', 'Ponto criado com sucesso.');
    }

    public function update(Request $request, $id)
    {
    	$validator = Validator::make($request->all(), [
    		'entry_time' => 'date_format:H:i:s|required',
    		'exit_time' => 'date_format:H:i:s|nullable',
    		'date' => 'date|required'
    	]);

    	if ($validator->fails()) {
            return redirect()->route('admin.point.edit', ['id'=>$id])
                    ->withErrors($validator)
                    ->withInput();
        }

        $point = Point::findOrFail($id);
        $point->entry_time = $request->entry_time;
        $point->exit_time = $request->exit_time;
        $point->save();

    	return redirect()->route('admin.point.list')
    		->with('success', 'Ponto atualizado com sucesso.');
    }

    public function destroy($id)
    {
    	$point = Point::findOrFail($id);
		$point->delete();
    	
    	return redirect()->route('admin.point.list')
    		->with('success', 'Ponto removido com sucesso.');
    }

}
