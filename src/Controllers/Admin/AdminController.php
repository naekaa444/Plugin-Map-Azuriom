<?php

namespace Azuriom\Plugin\Map\Controllers\Admin;

use Azuriom\Http\Controllers\Controller;
use Azuriom\Models\Setting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            Setting::updateSettings(['map.url' => $request->input('url')]);

            return redirect()->route('map.admin.settings')->with('success', 'Settings updated successfully');
        }

        return view('map::admin.index');
    }
}
