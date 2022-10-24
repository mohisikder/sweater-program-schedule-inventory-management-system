<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\View\Factory;

class BackendController extends Controller
{

    public function index(): View|Factory|Application
    {
        return view('backend.modules.index');
    }
}