<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Daftar;

class Menu extends Controller
{
    public function index($value='')
    {
    	$data = Daftar::all();
        return view('tampilan.home')->with('data', $data);
    }

    public function store(Request $request)
    {
       Daftar::create($request->all());
       return redirect('daftar');
    }

	public function selesai($id)
    {
    	$kirim = array( 
								"status"			=> "selesai",
								);
    	$update = \App\Daftar::where('no', $id)->update($kirim);
    	return redirect('daftar');
    }    

    public function hapus($id)
    {
    	$update = \App\Daftar::where('no', $id)->delete();
    	return redirect('daftar');
    }    
}