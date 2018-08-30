<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Party;
use App\Rsvp;

class PartyController extends Controller
{
    public function index()
    {

    }

    public function create()
    {

    }

    public function show($slug) {
        $party = Party::where('id', $slug)
                ->orWhere('slug', $slug)
                ->firstOrFail();

        return view('layouts.party.show', compact('party'));
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|max:100',
            'slug' => 'required|max:100',
            'photo' => '',
            'location' => '',
            'role' => 'required',
            'groom' => '',
            'about' => 'required|max:500',
            'url' => ''
        ]);


        Party::create(request(['name', 'slug', 'photo','location','role','groom', 'about', 'url']));

        $rsvps = Rsvp::get();
        return view('home', compact('rsvps'));
    }

    public function delete(Party $party) {

    }
}
