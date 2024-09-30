<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function jadwal(Request $request){
        $data ['jadwal'] = jadwal::all();
        $data ['total_jadwal'] = $data ['jadwal']->count();
    
        return view('jadwal',$data);
    }
    public function viewcreate(){
        return view('jadwal-create');
    }
    public function jadwalcreate(Request $request){
        jadwal::create([
            'anggota' => $request->anggota,
            'hari' => $request->hari
        ]);
        return redirect('jadwal');
    }
    public function jadwaledit(Request $request){
        $data['jadwal'] = jadwal::find($request->id);
        return view('jadwal-edit',$data);
    }
    public function edit(Request $request){
        $jadwal = jadwal::Where('id', $request->id)->first();
        $jadwal->update([
            'anggota' => $request->anggota,
            'hari' => $request->hari
        ]);
        return redirect('/jadwal');

    }
    public function delete(Request $request){
        jadwal::where('id',$request->id)->delete();
        return redirect('/jadwal');
    }
    public function detailjadwal(Request $request){
        $data ['jadwal'] = jadwal::all();
        return view('detailjadwal', $data);
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        
        // Query untuk mencari berdasarkan nama anggota
        $jadwal = Jadwal::where('anggota', 'like', '%' . $search . '%')->get();

        // Kembalikan hasil pencarian ke view
        return view('detailjadwal', compact('jadwal'))->with('success', 'Hasil pencarian untuk: ' . $search);
    }
    public function hhsearch(Request $request)
    {
        $search = $request->input('search');
        
        // Query untuk mencari berdasarkan nama anggota
        $jadwal = Jadwal::where('anggota', 'like', '%' . $search . '%')->get();

        // Kembalikan hasil pencarian ke view
        return view('jadwal', compact('jadwal'))->with('success', 'Hasil pencarian untuk: ' . $search);
    }
}
