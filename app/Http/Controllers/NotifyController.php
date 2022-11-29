<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NotifyModel;
use Illuminate\Support\Facades\Auth;

class NotifyController extends Controller
{
    protected function show(){
        $data = NotifyModel::where('user_id', Auth::user()->id)->get();
        $html = '';
        foreach($data as $row){
            $html .= view('notify')->with('id', $row->id)->render();
        }
        return view('start_page')->with('html', $html);
    }

    protected function create(Request $request)
    {
        $inputs = $request->all();
        $id = NotifyModel::create([
            'user_id' => $inputs['id'],
        ]);
        return view('notify')->with('id', $id['id']);
    }

    protected function delete(Request $request){
        $inputs = $request->all();
        if(!empty($inputs['id'])){
            $deleted = NotifyModel::where('id', $inputs['id'])->delete();
            if(!empty($deleted))
                return '';
            else
                return 'nice try';
        }
            return 'nice try';
    }
}
