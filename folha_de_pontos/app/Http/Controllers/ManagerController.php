<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ManagerController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = User::with(['position'])->get()->find(auth()->user()->id);

        return view('users.employe.profile', compact('user'));
    }

    public function showEmploye($id)
    {
        $user = User::find($id);
        return view('users.employe.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    // listar apenas usuarios com relacao a empresa
    public function listEmployes()
    {
        $users = User::with(['position'])->get();

        return view('users.employe.manager.list_employes', compact('users'));

    }

    public function createIndividualReport()
    {
        $users = User::with(['position'])->get();
        
        return view('users.employe.manager.reports.individual_report', compact('users'));
    }

    public function createGeneralReport()
    {
        $users = User::with(['position'])->get();

        return view('users.employe.manager.reports.general_report', compact('users'));
    }

}
