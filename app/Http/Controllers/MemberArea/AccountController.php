<?php

namespace App\Http\Controllers\MemberArea;

use App\Http\Controllers\Controller;
use domain\Facades\ProductFacade;
use Illuminate\Http\Request;

class AccountController extends ParentController
{
    public function index()
    {
        return view('Pages.MemberArea.account.index');
    }

    public function addCart(Request $request)
    {
        ProductFacade::addCart($request->all());
        return redirect()->back();


    }
}
