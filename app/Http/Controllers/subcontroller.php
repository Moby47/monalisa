<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sub;

class subcontroller extends Controller
{
    
public function sub(Request $request){
    $name = $request->input('name');
    $mail = $request->input('mail');

    $save = new sub;

    $save->name = $name;
    $save->mail = $mail;
    $save->save();

    return response()->json(['succes'=>'subscribed!']);
}

}
