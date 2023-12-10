<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Study;
use Illuminate\Support\Facades\Auth;
use App\Models\Departament;
use Illuminate\Support\Str;

class StudyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = auth()->user();
        $studies = $user->candidate->curriculum->studies;

        return view('study.index', compact('user','studies'));
    }

    public function create(){
        $departaments = Departament::with('municipalities')->get();
        return view('study.create', compact('user','departaments'));
    }

    public function store(Request $request){

        $curriculum = Auth::user()->candidate->curriculum;

        Study::create([
            'curriculum_id' => $curriculum->id,
            'name_institution' => $request->name_institution,
            'id_denomination' => $request->id_denomination,
            'id_departament' => $request->id_departament,
            'id_municipality' => $request->id_municipality,
            'addres' => Str::lower($request->addres),
            'end_date' => $request->end_date
        ]);
        return redirect()->route('study.index');
    }
}