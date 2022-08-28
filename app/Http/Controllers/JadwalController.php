<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JadwalController extends Controller
{
    public function jadwal()
    {
        return DB::table('guru')
                ->crossJoin('jadwal')
                ->select('jadwal.id_jadwal', 'jadwal.hari', 'jadwal.kelas_id', 'jadwal.mapel', 'jadwal.mulai', 'jadwal.sampai', 'guru.nama_guru')
                ->where('guru.id_guru', '=', DB::raw('jadwal.guru_id'));
    }   

    public function jadwalSenin()
    {
        return $this->jadwal()->where('jadwal.hari', '=', 'Senin');
    }
    
    public function jadwalSelasa()
    {
        return $this->jadwal()->where('jadwal.hari', '=', 'Selasa');
    }

    public function jadwalRabu()
    {
        return $this->jadwal()->where('jadwal.hari', '=', 'Rabu');
    }

    public function jadwalKamis()
    {
        return $this->jadwal()->where('jadwal.hari', '=', 'Kamis');
    }

    public function jadwalJumat()
    {
        return $this->jadwal()->where('jadwal.hari', '=', 'Jumat');
    }

    public function jadwalSabtu()
    {
        return $this->jadwal()->where('jadwal.hari', '=', 'Sabtu');
    }

    public function index(Request $request)
    {
        return view('jadwal.index', [
            'title' => 'Jadwal Pelajaran',
            'navactive' => 'jadwal',
            'ai' => 1,
            'dataKelas' => DB::table('kelas')->get(),
            'kelasSelected' => DB::table('kelas')->where('id_kelas', request('id_kelas'))->get(),
            'dataGuru' => DB::table('guru')->get(),
            'dataHari' => DB::table('hari')->get(),
            'dataSenin' => $this->jadwalSenin()->where('jadwal.kelas_id', request('id_kelas'))->get(),
            'dataSelasa' => $this->jadwalSelasa()->get(),
            'dataRabu' => $this->jadwalRabu()->get(),   
            'dataKamis' => $this->jadwalKamis()->get(),
            'dataJumat' => $this->jadwalJumat()->get(),
            'dataSabtu' => $this->jadwalSabtu()->where('jadwal.kelas_id', request('id_kelas'))->get(),
        ]);
    }

    public function addJadwal(Request $request)
    {

    }

    public function deleteJadwal(Request $request)
    {
        
    }
}
