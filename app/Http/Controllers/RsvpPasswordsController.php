<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RsvpPasswords;
use App\Rsvp;
use Illuminate\Support\Facades\Hash;

class RsvpPasswordsController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->only(['store']);
    }

    public function checkPassword(Request $request) {

        $passwords = RsvpPasswords::all();

        foreach($passwords as $password) {
            $verified = Hash::check($request->password, $password->password);
            if($verified) {
                return "true";
            }
        }
        return "false";

    }

    public function store(Request $request) {

        RsvpPasswords::create([
            'password' => Hash::make($request->password),
        ]);

        $rsvps = Rsvp::get();
        return view('home', compact('rsvps'));

    }
}
