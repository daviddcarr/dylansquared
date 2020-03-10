<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RsvpPassword;
use App\Rsvp;
use Illuminate\Support\Facades\Hash;

class RsvpPasswordController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->only(['store']);
    }

    // public function checkPassword(Request $request) {

    //     $passwords = RsvpPassword::all();

    //     foreach($passwords as $password) {
    //         $verified = Hash::check($request->password, $password->password);
    //         if($verified) {
    //             return "true";
    //         }
    //     }
    //     return "false";

    // }

    public function store(Request $request) {

        RsvpPassword::create([
            'password' => $request->password,
        ]);

        return view('pages.index');

    }
}
