<?php

namespace App\Http\Controllers;

use App\Models\defect;
use Illuminate\Http\Request;

class defectController extends Controller
{
    //
    function getData(){

        return defect::all();
        
        }
}
