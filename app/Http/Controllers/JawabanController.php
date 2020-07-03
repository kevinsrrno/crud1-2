<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\jawaban;
class JawabanController extends Controller
{
    public function index(){
        $items=jawaban::get_all();
       // dd($items);
        return view('jawaban.jb',compact('items'));
    }
    public function store(Request $request){
        // dd($_REQUEST->all());
        $data = $request->all();
   unset($data["_token"]);
   
         $items = pertanyaan::save($data);
         dd($items);
         if($items){
             return view('/jawaban');
         }
       }
}
