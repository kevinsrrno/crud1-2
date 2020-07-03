<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\pertanyaan;
class PertanyaanController extends Controller
{
         public function index(){
        $items=pertanyaan::get_all();
        //dd($items);
        return view('jawaban.index',compact('items'));
    }

    public function create(){
        return view('jawaban.form');
    }
    public function store(Request $request){
     // dd($_REQUEST->all());
     $data = $request->all();
unset($data["_token"]);

      $items = pertanyaan::save($data);
      dd($items);
      if($items){
          return view('/pertanyaan');
      }
    }
}
