<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke()
    {
        return view('contact');
    }

    public function index()
    {
        return view('admin-create');
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
