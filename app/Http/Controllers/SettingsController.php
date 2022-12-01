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

    protected function save(Request $request){
        $validated = $request->validate([
            'name' => 'string|max:20|nullable',
            'time_check' => 'integer|nullable',
            'count_pages' => 'integer|nullable',
            'text_ideal' => 'url|nullable',
            'text_olx' => 'url|nullable',
            'text_fb' => 'url|nullable',
            'notify_from' => 'string|max:20|nullable',
        ]);
        $inputs = $request->all();

        SettingsModel::where('user_id', Auth::user()->id)
            ->update([
                'name'=>$inputs['name'],
                'time_check'=>$inputs['time_check'],
                'count_pages'=>$inputs['count_pages'],
                'check_ideal'=>!empty($inputs['check_ideal']) ? 'true' : 'false',
                'text_ideal'=>$inputs['text_ideal'],
                'check_olx'=>!empty($inputs['check_olx']) ? 'true' : 'false',
                'text_olx'=>$inputs['text_olx'],
                'check_fb'=>!empty($inputs['check_fb']) ? 'true' : 'false',
                'text_fb'=>$inputs['text_fb'],
                'notify_from'=>$inputs['notify_from'],
            ]);
        return redirect()->to('start_page');
    }
}
