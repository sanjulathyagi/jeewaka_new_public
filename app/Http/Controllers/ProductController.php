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
        return view('Pages.Products.index')->with($response);
    }

    public function filter(Request $request)
    {
        $response['products'] = ProductFacade::filter($request->all());
        return view('Pages.Products.components.filter')->with($response);
    }

    public function view($product_id)
    {
        $response['products'] = ProductFacade::get($product_id);
        return view('Pages.Products.index')->with($response);
    }

    public function addCart(Request $request,$product_id)
    {
        
    }
}
