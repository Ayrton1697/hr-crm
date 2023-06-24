<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class languageController extends Controller
{
    public function setLanguageFirst($language){

    
        if($language == "es" || $language == 'en'){
            App::setLocale($language);
            return view('index',['lang' => $language]);
        }
        else{
             return view('index',['lang' => "es"]);
        }

      
    }
    public function setLanguage($lang){
        // dd($lang);
    
        if($lang == "es" || $lang == 'en'){
            App::setLocale($lang);
            return redirect()->back()->with(['lang' => $lang]);
        }
        else{
             return view('index',['lang' => "es"]);
        }

      
    }
}
