<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;


class AdminContactController extends Controller
{
    public function index()
    {
        return view('adminContact', [
            'contacts' => Contact::all()
        ]);
    }
}
