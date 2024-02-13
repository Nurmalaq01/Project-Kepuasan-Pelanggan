<?php

namespace App\Http\Controllers;

use App\Models\TemporaryData;
use App\Models\FormThree;
use App\Http\Requests\StoreKepuasanRequest;
use App\Http\Requests\UpdateKepuasanRequest;
use Illuminate\Http\Request;

class Kepuasan extends Controller
{
                /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $satu = TemporaryData::where('kecepatanOne', '=' , 'Tidak Puas')->count();
        $dua = TemporaryData::where('kecepatanOne', '=' , 'Cukup Puas')->count();
        $tiga = TemporaryData::where('kecepatanOne', '=' , 'Puas')->count();
        $empat = TemporaryData::where('kecepatanOne', '=' , 'Sangat Puas')->count();

        $lima = TemporaryData::where('ketepatanTwo', '=' , 'Tidak Puas')->count();
        $enam = TemporaryData::where('ketepatanTwo', '=' , 'Cukup Puas')->count();
        $tujuh = TemporaryData::where('ketepatanTwo', '=' , 'Puas')->count();
        $delapan = TemporaryData::where('ketepatanTwo', '=' , 'Sangat Puas')->count();

        $sembilan = TemporaryData::where('responThree', '=' , 'Tidak Puas')->count();
        $sepuluh = TemporaryData::where('responThree', '=' , 'Cukup Puas')->count();
        $sebelas = TemporaryData::where('responThree', '=' , 'Puas')->count();
        $duabelas = TemporaryData::where('responThree', '=' , 'Sangat Puas')->count();

        $satu1 = TemporaryData::where('layananFour', '=' , 'Tidak Puas')->count();
        $dua2 = TemporaryData::where('layananFour', '=' , 'Cukup Puas')->count();
        $tiga3 = TemporaryData::where('layananFour', '=' , 'Puas')->count();
        $empat4 = TemporaryData::where('layananFour', '=' , 'Sangat Puas')->count();

        $lima5 = TemporaryData::where('pegawaiFive', '=' , 'Tidak Puas')->count();
        $enam6 = TemporaryData::where('pegawaiFive', '=' , 'Cukup Puas')->count();
        $tujuh7 = TemporaryData::where('pegawaiFive', '=' , 'Puas')->count();
        $delapan8 = TemporaryData::where('pegawaiFive', '=' , 'Sangat Puas')->count();

        $sembilan9 = TemporaryData::where('etikaSix', '=' , 'Tidak Puas')->count();
        $sepuluh10 = TemporaryData::where('etikaSix', '=' , 'Cukup Puas')->count();
        $sebelas11 = TemporaryData::where('etikaSix', '=' , 'Puas')->count();
        $duabelas12 = TemporaryData::where('etikaSix', '=' , 'Sangat Puas')->count();
        return view('kepuasan',['satu'=> $satu, 'dua'=> $dua, 'tiga'=> $tiga, 'empat'=> $empat,
        'lima'=> $lima, 'enam'=> $enam, 'tujuh'=> $tujuh, 'delapan'=> $delapan,
        'sembilan'=> $sembilan, 'sepuluh'=> $sepuluh, 'sebelas'=> $sebelas, 'duabelas'=> $duabelas,
        'satu1'=> $satu1, 'dua2'=> $dua2, 'tiga3'=> $tiga3, 'empat4'=> $empat4,
        'lima5'=> $lima5, 'enam6'=> $enam6, 'tujuh7'=> $tujuh7, 'delapan8'=> $delapan8,
        'sembilan9'=> $sembilan9, 'sepuluh10'=> $sepuluh10, 'sebelas11'=> $sebelas11, 'duabelas12'=> $duabelas12]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
}
