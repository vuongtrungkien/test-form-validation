<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormExampleRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create(){
        return view('create');
    }


    public function checkValidation(FormExampleRequest $request)
    {
        $success = "Dữ liệu được xác thực thành công";
        return view('create', compact('success'));
    }
}
