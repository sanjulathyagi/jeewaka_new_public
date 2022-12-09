<?php

namespace App\Http\Controllers\MemberArea;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends ParentController
{
    public function index()
    {
        return view('MemberArea.account.index');
    }
}
