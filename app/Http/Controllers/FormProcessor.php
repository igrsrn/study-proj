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
        $response = [
            'first name' => $request->get('firstname'),
            'last name' => $request->get('lastname'),
            'email' => $request->get('email'),
        ];
        return response()->json($response, 200, [], JSON_UNESCAPED_UNICODE);
    }
}
