<?php

namespace App\Http\Controllers;

use App\Office;
use Illuminate\Http\Request;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        $offices  = 'office of the city administrator';

        $objectData = DB::table('offices')
            ->select('id', 'code', 'office_name')
            ->get();

        return view('crud', ['offices' => $offices, 'data' => $objectData, 'data2' => $objectData]);
    }

    public function unauthorized()
    {
        return view('unauthorized');
    }

    public function edit(Request $req, Office $office)
    {
        $office = $office->find($req->id);
        $office->update($req->all());
        return \redirect('/adminOnlyPage');
    }

    public function delete(Request $req, Office $office)
    {
        $office = $office->find($req->id);
        $office->delete();
        return \redirect('/adminOnlyPage');
    }
}
