<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dojo;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();

        $dojo = Dojo::select('id')->where('user_id', $user->id)->get();

        $students = array("name" => $request->name, "address" => $request->address, "city" => $request->city, "state" => $request->state, "belt" => $request->belt, "birth_date" => $request->birth_date ,"email" => $request->email, "cpf" => $request->cpf, "dojo_id" => $dojo[0]->id);
        Students::create($students);

        return redirect()->route('panel')->with('success', 'Created');
    }

    public function delete($id){
        Students::destroy($id);
        return redirect()->route('panel')->with('deleted', 'Created');
    }

    public function edit($student, $id){
        
    }
}
