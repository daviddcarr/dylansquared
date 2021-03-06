<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rsvp;
use App\RsvpPassword;

class RsvpController extends Controller
{
    // public function index()
    // {
    //     return view('pages.index');
    // }
    //
    // public function create()
    // {
    //     return view('posts.create');
    // }

    // public function __construct() {
    //     $this->middleware('auth')->only(['store'])
    // }

    public function show() {
        $rsvps = Rsvp::get();

        return view('pages.admin', compact('rsvps'));
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|max:100',
            'email' => '',
            'family' => 'required',
            'guest' => '',
            'num_of_children' => '',
            'password' => 'required'
        ]);

        $verified = false;
        $passwords = RsvpPassword::get();
        foreach($passwords as $password) {
            if ($password->password == request('password')) {
                $verified = true;
            }
        }

        if ($verified) {
            $rsvp = Rsvp::create(request(['name','email','family','guest','num_of_children']));
            return view('pages.thanks', compact('rsvp'));
        } else {
            return view('pages.thanks', compact('verified'));
        }


        // redirect to the home page

        // return redirect('/thanks');
        //return ['message' => 'RSVP Submitted!'];
    }

    public function delete(Rsvp $rsvp) {

        // Delete the corresponding post and return to the admin page.
        Rsvp::where('id', $rsvp['id'])->delete();

        return redirect('/admin');

    }

    public function thanks() {
        return view('pages.thanks');
    }
}
