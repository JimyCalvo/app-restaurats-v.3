<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LocalesController extends Controller
{
    public function metodo1()
    {
        // $dataLocales=DB::table("localestb")->get();
        // return view('locales',['dataLocales'=>$dataLocales]);
        return view('locales.locales');
    }
   
}
