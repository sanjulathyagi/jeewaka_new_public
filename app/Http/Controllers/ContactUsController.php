<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('Pages.Contact.index');
    }

    public function store()
    {
        return back()->with('message','Thanks for contacting us');
    }
}
