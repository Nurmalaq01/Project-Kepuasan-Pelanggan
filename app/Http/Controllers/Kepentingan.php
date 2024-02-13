<?php

namespace App\Http\Controllers;

use App\Models\FormOne;
use App\Models\FormTwo;
use App\Models\TemporaryData;
use App\Models\FormThree;
use App\Models\FormFour;
use App\Http\Requests\StoreKepentinganRequest;
use App\Http\Requests\UpdateKepentinganRequest;
use Illuminate\Http\Request;

class Kepentingan extends Controller
{
            /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $one = TemporaryData::where('kecepatan', '=' , 'Tidak Penting')->count();
        $two = TemporaryData::where('kecepatan', '=' , 'Cukup Penting')->count();
        $three = TemporaryData::where('kecepatan', '=' , 'Penting')->count();             //1
        $four = TemporaryData::where('kecepatan', '=' , 'Sangat Penting')->count();

        $five =TemporaryData::where('ketepatan', '=' , 'Tidak Penting')->count();
        $six = TemporaryData::where('ketepatan', '=' , 'Cukup Penting')->count();
        $seven = TemporaryData::where('ketepatan', '=' , 'Penting')->count();             //2
        $eight = TemporaryData::where('ketepatan', '=' , 'Sangat Penting')->count();

        $nine = TemporaryData::where('respon', '=' , 'Tidak Penting')->count();
        $ten = TemporaryData::where('respon', '=' , 'Cukup Penting')->count();
        $eleven = TemporaryData::where('respon', '=' , 'Penting')->count();               //3
        $twelve = TemporaryData::where('respon', '=' , 'Sangat Penting')->count();

        $one1 = TemporaryData::where('layanan', '=' , 'Tidak Penting')->count();
        $two2 = TemporaryData::where('layanan', '=' , 'Cukup Penting')->count();
        $three3 = TemporaryData::where('layanan', '=' , 'Penting')->count();              //4
        $four4 = TemporaryData::where('layanan', '=' , 'Sangat Penting')->count();

        $five5 = TemporaryData::where('pegawai', '=' , 'Tidak Penting')->count();
        $six6 = TemporaryData::where('pegawai', '=' , 'Cukup Penting')->count();
        $seven7 = TemporaryData::where('pegawai', '=' , 'Penting')->count();              //5
        $eight8 = TemporaryData::where('pegawai', '=' , 'Sangat Penting')->count();

        $nine9 = TemporaryData::where('etika', '=' , 'Tidak Penting')->count();
        $ten10 = TemporaryData::where('etika', '=' , 'Cukup Penting')->count();
        $eleven11 = TemporaryData::where('etika', '=' , 'Penting')->count();              //6
        $twelve12 = TemporaryData::where('etika', '=' , 'Sangat Penting')->count();
        return view('kepentingan',['one'=> $one, 'two'=> $two, 'three'=> $three, 'four'=> $four,
        'five'=> $five, 'six'=> $six, 'seven'=> $seven, 'eight'=> $eight,
        'nine'=> $nine, 'ten'=> $ten, 'eleven'=> $eleven, 'twelve'=> $twelve,
        'one1'=> $one1, 'two2'=> $two2, 'three3'=> $three3, 'four4'=> $four4,
        'five5'=> $five5, 'six6'=> $six6, 'seven7'=> $seven7, 'eight8'=> $eight8,
        'nine9'=> $nine9, 'ten10'=> $ten10, 'eleven11'=> $eleven11, 'twelve12'=> $twelve12,]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormOne  $formOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormOne $formOne)
    {
        //
    }
}

