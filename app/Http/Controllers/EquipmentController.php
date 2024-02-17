<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;

class EquipmentController extends Controller
{
    public function create(Request $request) {
        $validated = $request->validate([
            'owner'=>'required|min:3', 
            'phone'=>'required|min:3', 
            'county'=>'required|min:3', 
            'ward'=>'required|min:3', 
            'town'=>'required|min:3', 
            'name'=>'required|min:3', 
            'photo'=>'required|image|mimetypes:image/*|max:2048', 
            'category'=>'required|min:3', 
            'rate'=>'required|numeric', 
            'frequency'=>'required', 
        ]);
        $validated['user_id'] = $request->session()->get('user')->id; 

        $imgName = time().".".$request->photo->extension();
        $request->photo->move(public_path('uploads'), $imgName);
        $validated['photo'] = $imgName;
        Equipment::create($validated); 
        return redirect('/');
    }
}
