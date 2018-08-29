<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Party;

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

    }

    public function delete(Party $party) {

    }
}
