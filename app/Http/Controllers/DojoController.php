<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dojo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DojoController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();

        $users = array("name" => $request->name, "address" => $request->address, "city" => $request->city, "state" => $request->state, "user_id" => $user->id);

        Dojo::create($users);

        return redirect()->route('panel')->with('success', 'Created');
    }
}
