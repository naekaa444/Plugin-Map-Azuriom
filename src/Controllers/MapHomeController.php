<?php

namespace Azuriom\Plugin\Map\Controllers;

use Azuriom\Http\Controllers\Controller;

class MapHomeController extends Controller
{
    public function index()
    {
        return view('map::index');
    }
}
