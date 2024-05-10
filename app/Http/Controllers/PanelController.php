<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Belt;
use App\Models\Dojo;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
{
    public function index(){
        $user = Auth::user();

        $dojo = Dojo::select('id')->where('user_id', $user->id)->get();

        $students = Students::where('dojo_id', $dojo[0]->id)->get();
        $belts = Belt::where('dojo_id' , $dojo[0]->id)->get();
        foreach ($belts as $belt) {
            $colors[] = $belt->color;
        }
        return view('panel', ['students' => $students, 'belts' => $colors]);
    }
}
