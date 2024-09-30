<?php

namespace App\Http\Controllers;

use App\Models\LaporanKejadian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaporanKejadianController extends Controller
{
    public function laporan(Request $request){
        $data ['laporan'] = LaporanKejadian::all();
        $data ['total_laporan'] = $data ['laporan']->count();
    
        return view('laporan',$data);
    }
    public function viewcreate(){
        return view('laporan-create');
    }
    public function laporancreate(Request $request){
        $filename = '';
        if ($request->file('foto')) {
            # code...
            $exFile = $request->file('foto')->getClientOriginalExtension();
            $filename = time().".".$exFile;
            $request -> file('foto')->storeAs('foto', $filename);
        }
        LaporanKejadian::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'waktu_kejadian' => $request->waktu_kejadian,
            'foto' => $filename
        ]);
        return redirect('/laporan');
    }
    public function laporanedit(Request $request){
        $data['laporan'] = LaporanKejadian::find($request->id);
        return view('laporan-edit',$data);
    }
    public function edit(Request $request){
        $laporan = LaporanKejadian::Where('id', $request->id)->first();

        
        if ($laporan->foto) {
            # code...
            Storage::delete('foto/'.$request->foto);

        }
        $filename = '';
        if ($request->file('foto')) {
            # code...
            $exFile = $request->file('foto')->getClientOriginalExtension();
            $filename = time().".".$exFile;
            $request -> file('foto')->storeAs('foto', $filename);
        }
        $laporan->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'waktu_kejadian' => $request->waktu_kejadian,
            'foto' => $filename
        ]);
        return redirect('/laporan');
    }
    
    public function delete(Request $request){
        LaporanKejadian::where('id',$request->id)->delete();
        return redirect('/laporan');
    }
    public function detaillaporan(Request $request){
        $data ['laporan'] = LaporanKejadian::all();
        return view('detaillaporan', $data);
    }
    public function detailcreate(){
        return view('detaillaporan-create');
    }
    public function detaillaporancreate(Request $request){
        $filename = '';
        if ($request->file('foto')) {
            # code...
            $exFile = $request->file('foto')->getClientOriginalExtension();
            $filename = time().".".$exFile;
            $request -> file('foto')->storeAs('foto', $filename);
        }
        LaporanKejadian::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'waktu_kejadian' => $request->waktu_kejadian,
            'foto' => $filename
        ]);
        return redirect('/detaillaporan');
    }
    public function detaildelete(Request $request){
        LaporanKejadian::where('id',$request->id)->delete();
        return redirect('/detaillaporan');
    }
}
