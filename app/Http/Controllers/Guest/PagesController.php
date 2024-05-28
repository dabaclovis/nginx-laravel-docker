<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('guest-users.pages.index');
    }

    public function about()
    {
        return view('guest-users.pages.about');
    }

    public function resume(Request $request)
    {
        return view('guest-users.pages.resume');
    }
}
