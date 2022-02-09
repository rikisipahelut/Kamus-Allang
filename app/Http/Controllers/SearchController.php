<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kamus;
use Illuminate\Support\Facades\DB; //ini untuk query builder

class SearchController extends Controller
{
    public function home(Request $request){
        return view('home');
    }
    public function search(Request $request){
        $inputsearch = $request['inputsearch'];
        $keyresult = DB::table('kamus')
        ->where('indonesia','like','%'.$inputsearch.'%')
        ->Orwhere('allang','like','%'.$inputsearch.'%')
        // ->where('indonesia','=',$inputsearch)
        // ->Orwhere('allang','=',$inputsearch)
        ->get();

        echo $keyresult;
    }
    public function index (){
        return view('found');
    }
}
