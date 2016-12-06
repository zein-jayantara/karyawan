<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Jalinmodule\Karyawan\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Jalinmodule\Karyawan\Models\Karyawan;

class KaryawanController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $karyawans = Karyawan::paginate(10);
        return view('inventaris/karyawan/index', ['data' => $karyawans]);
    }
    
    public function newkaryawan()
    {
        return view('inventaris/karyawan/formkaryawan', []);
    }
    
    public function store(Request $request)
    {       
        if($request->name){
            Karyawan::insert([
                'name' => $request->name,
                'alamat' => $request->alamat,
                'telp' => $request->telp,
            ]);
        }
        return redirect('karyawan');
    }

}
