<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    public function index()
    {
        return view('userform');
    }
    public function store(Request $request)
    {
        $data = [
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
        ];
        return view('usergreeting', ['response' => $data]);
    }
}
