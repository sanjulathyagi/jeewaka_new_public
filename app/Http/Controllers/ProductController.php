<?php

namespace App\Http\Controllers;

use domain\Facades\CategoryFacade;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $response['categories'] = CategoryFacade::all();
        return view('Pages.Product.index');
    }
}
