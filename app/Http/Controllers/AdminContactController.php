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

    public function edit(Contact $contact)
    {
        return view('admin-contact-edit', [
            'contact' => $contact
        ]);
    }

    public function update(Contact $contact)

    {
        $attributes = request()->validate([

            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'contact_number' => 'required|max:10|min:10',
            'email' => 'required|email|max:255'
        ]);

       $contact->update($attributes);

       return back()->with('success', 'contact updated!');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('success', 'contact deleted!');
    }

}
