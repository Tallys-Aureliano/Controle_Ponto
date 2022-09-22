<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Position;
use App\Models\Busines;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $positions = Position::with(['sectors_id'])->get();

        $users = User::with('position')->get();
        // $users->

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $businesss = Busines::all();
        $positions = Position::all();

        return view('users.admin.employe.create', compact('businesss', 'positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'cpf' => ['required', 'string', 'max:14'],
            'matricula' => ['integer', 'max:999999999999999', 'unique:users,matricula'],
            'business' => ['required', 'integer', 'exists:business,id'],
            'position' => ['required', 'integer', 'exists:positions,id'],
            'role' => ['required', 'int', 'in:0,1,2']
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.employe.create')
                    ->withErrors($validator)
                    ->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'cpf' => $request->cpf,
            'matricula' => $request->matricula,
            'auto_register' => false,
            'role' => $request->role,
            'positions_id' => $request->position,
            'business_id' => $request->business
        ])->save();

        return redirect()->route('admin.employe.list')
            ->with('success', 'Funcionário adicionado com sucesso.');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $businesss = Busines::all();
        $positions = Position::all();

        return view('users.admin.employe.edit', compact('user', 'businesss', 'positions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'cpf' => ['required', 'string', 'max:14', 'unique:users,cpf,' . $user->id],
            'business' => ['required', 'integer', 'exists:business,id'],
            'position' => ['required', 'integer', 'exists:positions,id'],
            'role' => ['required', 'integer', 'in:0,1,2'],
            'matricula' => ['nullable', 'string','max:19', 'unique:users,matricula,' . $user->id]
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.employe.edit', ['id'=>$id])
                    ->withErrors($validator)
                    ->withInput();
        }

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->matricula = $request->matricula;
        $user->cpf = $request->cpf;
        $user->role = $request->role;
        $user->business_id = $request->business;
        $user->position_id = $request->position;
        $user->save();

        return redirect()->route('admin.employe.list')
            ->with('success', 'Funcionário atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->active = 0;
        $user->save();

        return redirect()->route('admin.employe.list')
            ->with('success', 'Usuário desativado com sucesso.');
    }
}
