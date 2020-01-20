<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    function save(Request $req){
        print_r($req->input());
    }
}
