<?php

namespace Miomo\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    //
    public function terminos()
    {
      // code...
      return view('statics.terminos');
    }

    public function privacidad()
    {
      // code...
      return view('statics.privacidad');
    }

    public function rules()
    {
      // code...
      return view('statics.rules');
    }
}
