<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class FormController extends Controller
{
    public function showForm()
    {
        $contacts = Contact::all();
        return view('form', compact('contacts'));
    }
    public function showData()
    {
        $contacts = Contact::all();
        return view('users', compact('contacts'));
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:500',
        ]);

        Contact::create($validated);

        return back()->with('success', 'Form submitted and saved successfully!');
    }

    public function deleteContact($id)
{
    $contact = Contact::findOrFail($id);
    $contact->delete();

    return back()->with('success', 'Contact deleted successfully!');
}

}
