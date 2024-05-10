<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Belt;
use App\Models\Dojo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeltController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();

        $dojo = Dojo::select('id')->where('user_id', $user->id)->get();

        $belt = array("color" => $request->color, "dojo_id" => $dojo[0]->id);

        Belt::create($belt);

        return redirect()->route('panel')->with('success', 'Created');
    }
}
