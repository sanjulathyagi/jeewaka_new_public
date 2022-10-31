<?php

namespace App\Http\Controllers;

use domain\Facades\ProductFacade;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $response['products'] = ProductFacade::all();
        return view('Pages.Home.index')->with($response);
    }
}
