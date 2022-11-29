<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SettingsModel;
use Illuminate\Support\Facades\Auth;


class SettingsController extends Controller
{
    protected function show(){
        $data = SettingsModel::where('user_id', Auth::user()->id)->get();
        return view('settings')->with('data', $data);
    }
}
