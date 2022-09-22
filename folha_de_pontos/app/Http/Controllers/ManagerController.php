<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Justification;
use App\Models\PointRegister as Point;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $points = Point::whereHas('users', function($query){
            $query->where('business_id', '=', auth()->user()->business_id)
            ->where('date', '=', date('Y-m-d'));
        })->get();

        return view('users.employe.dashboard', compact('points'));
    }

    public function listJustificatives()
    {
        // $justifications = Justification::with(['user'])->get();

        $justifications = Justification::whereHas('user', function($query){
            $query->where('business_id', '=', auth()->user()->business_id);
        })->get();

        return view('users.employe.manager.list_justifications', compact('justifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPoint()
    {
        if(auth()->user()->role == 1){
            if(auth()->user()->is_point_active == 0){
                $user = User::findOrFail(auth()->user()->id);
                $user->is_point_active = 1;
                $user->save();
            }
            return view('users.employe.manager.create_points');
        }
        return redirect()->route('dashboard')
            ->with('error', 'Você não possui permissão para acessar a página requisitada.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePoint(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'matricula' => 'required|integer|max:999999999999999|exists:users,matricula',
            'password' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->route('manager.point.create')
                    ->withErrors($validator)
                    ->withInput();
        }

        $user = User::where('matricula', $request->matricula)->first();
            if (Hash::check($request->password, $user->password))
            {
                if(!$user->business_id == auth()->user()->business_id){
                    return redirect()->route('manager.point.create')
                        ->with('error', 'Esse funcionário não trabalha nesta empresa.');
                }
                date_default_timezone_set('America/Sao_Paulo');
                $point = Point::where('users_id', $user->id)
                    ->where('date', '=', date('Y-m-d'))
                    ->whereNull('exit_time')->first();

                $time = date('H:i');
                if($point){
                    $point->exit_time = $time;
                    $point->save();
                    return redirect()->route('manager.point.create')
                        ->with('success', 'Ponto fechado com sucesso.');
                }
                
                $point = Point::create([
                    'entry_time' => $time,
                    'date' => date('Y-m-d'),
                    'users_id' => $user->id
                ])->save();

                return redirect()->route('manager.point.create')
                    ->with('success', 'Ponto aberto com sucesso.');
            }
        return redirect()->route('manager.point.create')
            ->with('error', 'Matricula ou senha incorreta.');
    }

    public function showEmploye($id)
    {
        $user = User::findOrFail($id);
        if($user->business_id == auth()->user()->business_id){
            return view('users.employe.profile', compact('user'));
        }
        return redirect()->route('dashboard')
            ->with('error', 'O funcionário consultado não existe em sua empresa.');
    }

    public function listEmployes()
    {
        $users = User::with(['position'])->where('business_id', auth()->user()->business_id)
            ->get();

        return view('users.employe.manager.list_employes', compact('users'));
    }

    public function createIndividualReport()
    {
        $users = User::with(['position'])
            ->where('business_id', auth()->user()->business_id)
            ->get();
        
        return view('users.employe.manager.reports.individual_report', compact('users'));
    }

    public function createGeneralReport()
    {
        $users = User::with(['position'])
        ->where('business_id', auth()->user()->business_id)
        ->get();

        return view('users.employe.manager.reports.general_report', compact('users'));
    }

}
