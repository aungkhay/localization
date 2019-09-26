<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
    //
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        
        return view('welcome');
    }
}

//references

//https://appdividend.com/2019/04/01/how-to-create-multilingual-website-using-laravel-localization/
