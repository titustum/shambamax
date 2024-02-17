<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Equipment;

class MainController extends Controller
{
    public function home(Request $request) {
        $equpments = Equipment::orderBy('id', 'desc')->get();
        return view('welcome', ['equipments'=>$equpments]);
    }
}
