<?php

namespace App\Http\Controllers;

use App\Models\FormOne;
use App\Models\FormTwo;
use App\Models\FormThree;
use App\Models\TemporaryData;
use App\Models\FormFour;
use Illuminate\Http\Request;

class Front extends Controller
{
    public function depan()
    {
        $total = TemporaryData::count();
        //Kepentingan
        $one = TemporaryData::where('kecepatan', '=' , 'Tidak Penting')->count();
        $yup1=100 / $total * $one;
        $persena = round($yup1 * 10) / 10;
        $yey1 = $persena * 1;
        $two = TemporaryData::where('kecepatan', '=' , 'Cukup Penting')->count();
        $yup2=100 / $total * $two;
        $persenb = round($yup2 * 10) / 10;
        $yey2 = $persenb * 2;
        $three = TemporaryData::where('kecepatan', '=' , 'Penting')->count();
        $yup3=100 / $total * $three;
        $persenc = round($yup3 * 10) / 10;
        $yey3 = $persenc * 3;
        $four = TemporaryData::where('kecepatan', '=' , 'Sangat Penting')->count();
        $yup4=100 / $total * $four;
        $persend = round($yup4 * 10) / 10;
        $yey4 = $persend * 4;

        //Total per pertanyaan
        $oi1 = ($yey1 + $yey2 + $yey3 + $yey4) / 4;
        $all1 = round($oi1 * 10) / 10;



        $five = TemporaryData::where('ketepatan', '=' , 'Tidak Penting')->count();
        $yup5=100 / $total * $five;
        $persene = round($yup5 * 10) / 10;
        $yey5 = $persene * 1;
        $six = TemporaryData::where('ketepatan', '=' , 'Cukup Penting')->count();
        $yup6=100 / $total * $six;
        $persenf = round($yup6 * 10) / 10;
        $yey6 = $persenf * 2;
        $seven = TemporaryData::where('ketepatan', '=' , 'Penting')->count();
        $yup7=100 / $total * $seven;
        $perseng = round($yup7 * 10) / 10;
        $yey7 = $perseng * 3;
        $eight = TemporaryData::where('ketepatan', '=' , 'Sangat Penting')->count();
        $yup8=100 / $total * $eight;
        $persenh = round($yup8 * 10) / 10;
        $yey8 = $persenh * 4;

        //Total per pertanyaan
        $oi2 = ($yey5 + $yey6 + $yey7 + $yey8) / 4;
        $all2 = round($oi2 * 10) / 10;



        $nine = TemporaryData::where('respon', '=' , 'Tidak Penting')->count();
        $yup9=100 / $total * $nine;
        $perseni = round($yup9 * 10) / 10;
        $yey9 = $perseni * 1;
        $ten = TemporaryData::where('respon', '=' , 'Cukup Penting')->count();
        $yup10=100 / $total * $ten;
        $persenj = round($yup10 * 10) / 10;
        $yey10 = $persenj * 2;
        $eleven = TemporaryData::where('respon', '=' , 'Penting')->count();
        $yup11=100 / $total * $eleven;
        $persenk = round($yup11 * 10) / 10;
        $yey11 = $persenk * 3;
        $twelve = TemporaryData::where('respon', '=' , 'Sangat Penting')->count();
        $yup12=100 / $total * $twelve;
        $persenl = round($yup12 * 10) / 10;
        $yey12 = $persenl * 4;

        //Total per pertanyaan
        $oi3 = ($yey9 + $yey10 + $yey11 + $yey12) / 4;
        $all3 = round($oi3 * 10) / 10;



        $one1 = TemporaryData::where('layanan', '=' , 'Tidak Penting')->count();
        $hai1=100 / $total * $one1;
        $persenm = round($hai1 * 10) / 10;
        $yo1 = $persenm * 1;
        $two2 = TemporaryData::where('layanan', '=' , 'Cukup Penting')->count();
        $hai2=100 / $total * $two2;
        $persenn = round($hai2 * 10) / 10;
        $yo2 = $persenn * 2;
        $three3 = TemporaryData::where('layanan', '=' , 'Penting')->count();
        $hai3=100 / $total * $three3;
        $perseno = round($hai3 * 10) / 10;
        $yo3 = $perseno * 3;
        $four4 = TemporaryData::where('layanan', '=' , 'Sangat Penting')->count();
        $hai4=100 / $total * $four4;
        $persenp = round($hai4 * 10) / 10;
        $yo4 = $persenp * 4;

        //Total per pertanyaan
        $oi4 = ($yo1 + $yo2 + $yo3 + $yo4) / 4;
        $all4 = round($oi4 * 10) / 10;


        $five5 = TemporaryData::where('pegawai', '=' , 'Tidak Penting')->count();
        $hai5=100 / $total * $five5;
        $persenq = round($hai5 * 10) / 10;
        $yo5 = $persenq * 1;
        $six6 = TemporaryData::where('pegawai', '=' , 'Cukup Penting')->count();
        $hai6=100 / $total * $six6;
        $persenr = round($hai6 * 10) / 10;
        $yo6 = $persenr * 2;
        $seven7 = TemporaryData::where('pegawai', '=' , 'Penting')->count();
        $hai7=100 / $total * $seven7;
        $persens = round($hai7 * 10) / 10;
        $yo7 = $persens * 3;
        $eight8 = TemporaryData::where('pegawai', '=' , 'Sangat Penting')->count();
        $hai8=100 / $total * $eight8;
        $persent = round($hai8 * 10) / 10;
        $yo8= $persent * 4;

        //Total per pertanyaan
        $oi5 = ($yo5 + $yo6 + $yo7 + $yo8) / 4;
        $all5 = round($oi5 * 10) / 10;



        $nine9 = TemporaryData::where('etika', '=' , 'Tidak Penting')->count();
        $hai9=100 / $total * $nine9;
        $persenu = round($hai9 * 10) / 10;
        $yo9 = $persenu * 1;
        $ten10 = TemporaryData::where('etika', '=' , 'Cukup Penting')->count();
        $hai10=100 / $total * $ten10;
        $persenv = round($hai10 * 10) / 10;
        $yo10 = $persenv * 2;
        $eleven11 = TemporaryData::where('etika', '=' , 'Penting')->count();
        $hai11=100 / $total * $eleven11;
        $persenw = round($hai11 * 10) / 10;
        $yo11 = $persenw * 3;
        $twelve12 = TemporaryData::where('etika', '=' , 'Sangat Penting')->count();
        $hai12=100 / $total * $twelve12;
        $persenx = round($hai12 * 10) / 10;
        $yo12= $persenx * 4;

        //Total per pertanyaan
        $oi6 = ($yo9 + $yo10 + $yo11 + $yo12) / 4;
        $all6 = round($oi6 * 10) / 10;



        //Kepuasan
        $satu = TemporaryData::where('kecepatanOne', '=' , 'Tidak Puas')->count();
        $ya1=100 / $total * $satu;
        $persen1 = round($ya1 * 10) / 10;
        $yoi1 = $persen1 * 1;
        $dua = TemporaryData::where('kecepatanOne', '=' , 'Cukup Puas')->count();
        $ya2=100 / $total * $dua;
        $persen2 = round($ya2 * 10) / 10;
        $yoi2 = $persen2 * 2;
        $tiga = TemporaryData::where('kecepatanOne', '=' , 'Puas')->count();
        $ya3=100 / $total * $tiga;
        $persen3 = round($ya3 * 10) / 10;
        $yoi3 = $persen3 * 3;
        $empat = TemporaryData::where('kecepatanOne', '=' , 'Sangat Puas')->count();
        $ya4=100 / $total * $empat;
        $persen4 = round($ya4 * 10) / 10;
        $yoi4 = $persen4 * 4;

        //Total per pertanyaan
        $ugh1 = ($yoi1 + $yoi2 + $yoi3 + $yoi4) / 4;
        $njay1 = round($ugh1 * 10) / 10;



        $lima = TemporaryData::where('ketepatanTwo', '=' , 'Tidak Puas')->count();
        $ya5=100 / $total * $lima;
        $persen5 = round($ya5 * 10) / 10;
        $yoi5 = $persen5 * 1;
        $enam = TemporaryData::where('ketepatanTwo', '=' , 'Cukup Puas')->count();
        $ya6=100 / $total * $enam;
        $persen6 = round($ya6 * 10) / 10;
        $yoi6 = $persen6 * 2;
        $tujuh = TemporaryData::where('ketepatanTwo', '=' , 'Puas')->count();
        $ya7=100 / $total * $tujuh;
        $persen7 = round($ya7 * 10) / 10;
        $yoi7 = $persen7 * 3;
        $delapan = TemporaryData::where('ketepatanTwo', '=' , 'Sangat Puas')->count();
        $ya8=100 / $total * $delapan;
        $persen8 = round($ya8 * 10) / 10;
        $yoi8 = $persen8 * 4;

        //Total per pertanyaan
        $ugh2 = ($yoi5 + $yoi6 + $yoi7 + $yoi8) / 4;
        $njay2 = round($ugh2 * 10) / 10;


        $sembilan = TemporaryData::where('responThree', '=' , 'Tidak Puas')->count();
        $ya9=100 / $total * $sembilan;
        $persen9 = round($ya9 * 10) / 10;
        $yoi9 = $persen9 * 1;
        $sepuluh = TemporaryData::where('responThree', '=' , 'Cukup Puas')->count();
        $ya10=100 / $total * $sepuluh;
        $persen10 = round($ya10 * 10) / 10;
        $yoi10 = $persen10 * 2;
        $sebelas = TemporaryData::where('responThree', '=' , 'Puas')->count();
        $ya11=100 / $total * $sebelas;
        $persen11 = round($ya11 * 10) / 10;
        $yoi11 = $persen11 * 3;
        $duabelas = TemporaryData::where('responThree', '=' , 'Sangat Puas')->count();
        $ya12=100 / $total * $duabelas;
        $persen12 = round($ya12 * 10) / 10;
        $yoi12 = $persen12 * 4;

        //Total per pertanyaan
        $ugh3 = ($yoi9 + $yoi10 + $yoi11 + $yoi12) / 4;
        $njay3 = round($ugh3 * 10) / 10;


        $satu1 = TemporaryData::where('layananFour', '=' , 'Tidak Puas')->count();
        $ya13=100 / $total * $satu1;
        $persen13 = round($ya13 * 10) / 10;
        $yoi13 = $persen13 * 1;
        $dua2 = TemporaryData::where('layananFour', '=' , 'Cukup Puas')->count();
        $ya14=100 / $total * $dua2;
        $persen14 = round($ya14 * 10) / 10;
        $yoi14 = $persen14 * 2;
        $tiga3 = TemporaryData::where('layananFour', '=' , 'Puas')->count();
        $ya15=100 / $total * $tiga3;
        $persen15 = round($ya15 * 10) / 10;
        $yoi15 = $persen15 * 3;
        $empat4 = TemporaryData::where('layananFour', '=' , 'Sangat Puas')->count();
        $ya16=100 / $total * $empat4;
        $persen16 = round($ya16 * 10) / 10;
        $yoi16 = $persen16 * 4;

        //Total per pertanyaan
        $ugh4 = ($yoi13 + $yoi14 + $yoi15 + $yoi16) / 4;
        $njay4 = round($ugh4 * 10) / 10;


        $lima5 = TemporaryData::where('pegawaiFive', '=' , 'Tidak Puas')->count();
        $ya17=100 / $total * $lima5;
        $persen17 = round($ya17 * 10) / 10;
        $yoi17 = $persen17 * 1;
        $enam6 = TemporaryData::where('pegawaiFive', '=' , 'Cukup Puas')->count();
        $ya18=100 / $total * $enam6;
        $persen18 = round($ya18 * 10) / 10;
        $yoi18 = $persen18 * 2;
        $tujuh7 = TemporaryData::where('pegawaiFive', '=' , 'Puas')->count();
        $ya19=100 / $total * $tujuh7;
        $persen19 = round($ya19 * 10) / 10;
        $yoi19 = $persen19 * 3;
        $delapan8 = TemporaryData::where('pegawaiFive', '=' , 'Sangat Puas')->count();
        $ya20=100 / $total * $delapan8;
        $persen20 = round($ya20 * 10) / 10;
        $yoi20 = $persen20 * 4;

        //Total per pertanyaan
        $ugh5 = ($yoi17 + $yoi18 + $yoi19 + $yoi20) / 4;
        $njay5 = round($ugh5 * 10) / 10;


        $sembilan9 = TemporaryData::where('etikaSix', '=' , 'Tidak Puas')->count();
        $ya21=100 / $total * $sembilan9;
        $persen21 = round($ya21 * 10) / 10;
        $yoi21 = $persen21 * 1;
        $sepuluh10 = TemporaryData::where('etikaSix', '=' , 'Cukup Puas')->count();
        $ya22=100 / $total * $sepuluh10;
        $persen22 = round($ya22 * 10) / 10;
        $yoi22 = $persen22 * 2;
        $sebelas11 = TemporaryData::where('etikaSix', '=' , 'Puas')->count();
        $ya23=100 / $total * $sebelas11;
        $persen23 = round($ya23 * 10) / 10;
        $yoi23 = $persen23 * 3;
        $duabelas12 = TemporaryData::where('etikaSix', '=' , 'Sangat Puas')->count();
        $ya24=100 / $total * $duabelas12;
        $persen24 = round($ya24 * 10) / 10;
        $yoi24 = $persen24 * 4;

        //Total per pertanyaan
        $ugh6 = round($yoi21 + $yoi22 + $yoi23 + $yoi24) / 4;
        $njay6 = round($ugh6 * 10) / 10;


        $gap1 = $all1 - $njay1;
        $gap2 = $all2 - $njay2;
        $gap3 = $all3 - $njay3;
        $gap4 = $all4 - $njay4;
        $gap5 = $all5 - $njay5;
        $gap6 = $all6 - $njay6;

        $sum = $njay1 + $njay2 + $njay3 + $njay4 + $njay5 + $njay6;
        $total_all = round($sum / 6);
        return view('csi',['njay1'=> $njay1, 'njay2'=> $njay2, 'njay3'=> $njay3, 
        'njay4'=> $njay4, 'njay5'=> $njay5, 'njay6'=> $njay6,
        'all1'=> $all1, 'all2'=> $all2, 'all3'=> $all3, 
        'all4'=> $all4, 'all5'=> $all5, 'all6'=> $all6, 'total_all'=> $total_all,
        'gap1' => $gap1, 'gap2' => $gap2, 'gap3' => $gap3, 'gap4' => $gap4, 'gap5' => $gap5, 'gap6' => $gap6,
        'yoi4'=> $yoi4, 'persen3'=> $persen3,  'one'=> $one, 'two'=> $two, 'three'=> $three, 'four'=> $four,]);
    }
}
