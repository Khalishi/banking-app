<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

use Illuminate\Support\Facades\DB;



class ContactController extends Controller
{
    public function __invoke()
    {
        $contacts = DB::table('contacts')->select('title','description','contact_number', 'email')->get();
        return view('contact')->with('contacts', $contacts);
    }

    public function create()
    {
        return view('admin-create');
    }

    public function store(Request $request)
    {

        $attributes = $request->validate([

            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'contact_number' => 'required|max:10|min:10',
            'email' => 'required|email|max:255'
        ]);

       Contact::create($attributes);

       return redirect('/admin/contact-info/create')->with('success', 'contact info saved!');
    }
}
