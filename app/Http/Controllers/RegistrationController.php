<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationConfirmed;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registrations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required','max:255'],
            'last_name' => ['required','max:255'],
            'email' => ['required','email'],
            'arrival' =>['required'],
            'referral' =>['required', Rule::in(['friend', 'physical-ad','digital-ad', 'search-engine','social-media','insititution']),],
        ]);

        $registration = Registration::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'arrival' => $request->input('arrival'),
            'referral' => $request->input('referral')
        ]);

        Mail::to($request->input('email'))->send(new RegistrationConfirmed($registration));
        return redirect('/registrations/create')->with('success', 'Registration confirmed! You will receive a confirmation email shortly.');
    }
}
