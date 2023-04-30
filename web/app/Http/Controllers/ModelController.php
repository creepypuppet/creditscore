<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class ModelController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function predict(Request $request)
    {
        $data = $request->collect();
        unset($data['_token']);
        $data = $data->values()->map(function ($value) {
            return (int) $value;
        })->toArray();
        $data = json_encode($data);
        $response = Http::get("http://model:8080/model?data=$data")->body();
        if ($response == '0') {
            Alert::success('Congratulations', 'Approved');
        } else {
            Alert::error('Sorry', 'Rejected');
        }
        return redirect()->back();
    }
}
