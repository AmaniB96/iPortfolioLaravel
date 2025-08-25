<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function edit(Contact $contact)
    {
        // Since there's only one, we can just grab the first one for the edit form
        $contact = Contact::first();
        return view('partials.contact.back.edit-page', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $contact->location = $request->location;
        $contact->email = $request->email;
        $contact->call = $request->call;
        $contact->save();

        return redirect()->route('backHome.index')->with('success', 'Contact info updated!');
    }
}
