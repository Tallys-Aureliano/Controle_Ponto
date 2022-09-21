<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use App\Models\User;
use App\Models\Justification;
use App\Models\PointRegister as Point;



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
        return view('users.employe.manager.create_employe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    // public function showJustifications()
    // {
    //     $justifications = Justification::all()
    //         ->where('users_id', auth()->user()->id);

    //     return view('users.employe.employe.show_justification', compact('justifications'));
    // }

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
        $user = User::find($id);

        return view('users.employe.manager.edit_employe', compact('user'));
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
        //
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
