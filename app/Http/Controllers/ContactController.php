<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create(Request $request)
    {
        $this->validate($request, contact::$rules);
        $form = $request->all();
        contact::create($form);
        return view('thanks');
    }
}
