<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class SettingsController extends Controller
{
    public function setCurrency($language){
        $currencies = json_decode(file_get_contents(base_path('data/currencies.json')), true);
        Session::put('chosenLanguage', $currencies[$language]);

        return redirect()->route('home');
    }
}
