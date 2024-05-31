<?php

namespace App\Http\Controllers;

use App\Models\defect;
use Illuminate\Http\Request;

class defectController extends Controller
{
    //
    function getData()
    {

        return defect::all();
    }
    function defectlist()

    {
        $data = defect::all();

        return view('pages.app.product-defects', ["defects" => $data]);
    }
    function delete($id)
    {

        $data = defect::find($id);

        $data->delete();

        return redirect('light-menu/app/product-defects');
    }
}
