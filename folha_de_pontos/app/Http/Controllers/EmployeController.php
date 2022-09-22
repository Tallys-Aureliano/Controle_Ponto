<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Justification;
use App\Models\PointRegister as Point;
use App\Models\Position;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.employe.dashboard');
    }

    public function listPoints()
    {
        $points = Point::where('users_id', auth()->user()->id)->get();

        return view('users.employe.employe.list_points', compact('points'));
    }

    public function listJustifications()
    {
        $justifications = Justification::where('users_id', auth()->user()->id)->get();

        return view('users.employe.employe.list_justifications', compact('justifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions = Position::all();

        return view('users.employe.manager.create_employe', compact('positions'));
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
            'cpf' => ['required', 'string', 'max:14'. 'unique:users,cpf'],
            'matricula' => ['required', 'integer', 'max:999999999999999', 'unique:users,matricula'],
            'position' => ['required', 'integer', 'exists:positions,id'],
            'role' => ['required', 'integer', 'in:1,2']
        ]);

        if ($validator->fails()) {
            return redirect()->route('manager.create.employe')
                    ->withErrors($validator)
                    ->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'cpf' => $request->cpf,
            'role' => $request->role,
            'matricula' => $request->matricula,
            'position_id' => $request->position,
            'business_id' => auth()->user()->business_id
        ])->save();

        return redirect()->route('manager.list_employes')
            ->with('success', 'Funcionário criado com sucesso.');
    }

    public function createJustifications()
    {
        return view('users.employe.employe.create_justification');
    }

    public function storeJustification(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment' => 'required|string|max:600',
            'file' => 'nullable|mimes:png,jpg,jpeg,pdf,doc,docx|max:10000',
            'date' => 'required|date'
        ]);

        if ($validator->fails()) {
            return redirect()->route('employe.justification.create')
                    ->withErrors($validator)
                    ->withInput();
        }

        // Storage::disk('public')->put($request->name, $request->_file_);
        // $file = "";

        $Justification = Justification::create([
            'comment' => $request->comment,
            'file' => $request->file,
            'date' => $request->date,
            'users_id' => auth()->user()->id
        ])->save();

        return redirect()->route('employe.justification.list')
            ->with('success', 'Justificativa criada com sucesso.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('users.employe.profile', compact('user'));
    }

    public function showEmploye($id)
    {
        $user = User::with(['position', 'business'])->findOrFail($id);

        return view('users.admin.employe.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $positions = Position::all();

        $user = User::find($id);
        if($user->business_id == auth()->user()->business_id){
            return view('users.employe.manager.edit_employe', compact('user', 'positions'));
        }
        return redirect()->route('manager.list_employes')
            ->with('error', 'O usuário consultado não faz parte de sua empresa.');
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
            'name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users,email,' . $user->id],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'cpf' => ['required', 'string', 'max:14', 'unique:users,cpf,' . $user->id],
            'matricula' => ['required', 'integer', 'max:999999999999999', 'unique:users,matricula,' . $user->id],
            'position' => ['required', 'integer', 'exists:positions,id'],
            'role' => ['required', 'integer', 'in:1,2']
        ]);

        if ($validator->fails()) {
            return redirect()->route('manager.edit.employe', ['id'=>$user->id])
                    ->withErrors($validator)
                    ->withInput();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->cpf = $request->cpf;
        $user->role = $request->role;
        $user->matricula = $request->matricula;
        $user->position_id = $request->position;
        $user->save();

        return redirect()->route('manager.list_employes')
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
        //
    }

    public function list(){
        $users = User::with(['position', 'business'])
            ->orderBy('active', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('users.admin.employe.list', compact('users'));
    }
}
