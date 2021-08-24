<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class comparationController extends Controller
{
    public function index()
    {
        return view('comparation.list');
    }

    public function comparation()
    {
        return view('comparation.comparation');
    }
    public function testing()
    {
        return view('comparation.testing');
    }

    public function uploadFile(Request $request)
    {
        if ($request->file('file')) {
            $resorceFile = $request->file('file');
            $nameFile   = "file_" . rand(00000, 99999) . "." . $resorceFile->getClientOriginalExtension();
            $resorceFile->move(\base_path() . "/public/assets/file/", $nameFile);
        }

        DB::table('file_uploads')->insert([
            'filename' => $nameFile
        ]);

        return redirect()->back();
    }
}
