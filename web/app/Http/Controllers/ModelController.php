<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
        return response()->json();
    }

    public function predict()
    {
        $command = escapeshellcmd('././model/main.py/');
        $output = shell_exec($command);
        return response()->json([
            'predict' => $output
        ]);
        return redirect()->back()->with([
            'prediction' => $output
        ]);
    }
}
