<?php

namespace App\Http\Controllers;

use domain\Facades\CategoryFacade;
use domain\Facades\ProductFacade;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $response['categories'] = CategoryFacade::all();
        return view('Pages.Product.index')->with($response);
    }

    public function filter(Request $request)
    {
        $response['products'] = ProductFacade::filter($request->all());
        return view('Pages.Product.components.filter')->with($response);
    }
}
