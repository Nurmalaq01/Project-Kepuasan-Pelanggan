<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\TemporaryData;


class TemporaryDataController extends Controller
{
    public function indexone()
    {
        return view('form1');
    }
    public function indextwo()
    {
        return view('form2');
    }
    public function indexthree()
    {
        return view('form3');
    }
    public function indexfour()
    {
        return view('form4');
    }

    public function stepOne(Request $request)
    {
        
        // Store the name in the session
        $request->session()->put('email', $request->input('email'));
        $request->session()->put('nama', $request->input('nama'));

        return redirect()->route('two');
    }

    public function stepTwo(Request $request)
    {
        // Store the address in the session
        $request->session()->put('kecepatan', $request->input('kecepatan'));
        $request->session()->put('ketepatan', $request->input('ketepatan'));
        $request->session()->put('respon', $request->input('respon'));
        $request->session()->put('layanan', $request->input('layanan'));
        $request->session()->put('pegawai', $request->input('pegawai'));
        $request->session()->put('etika', $request->input('etika'));

        return redirect()->route('three');
    }

    public function stepThree(Request $request)
    {
        // Store the address in the session
        $request->session()->put('kecepatanOne', $request->input('kecepatanOne'));
        $request->session()->put('ketepatanTwo', $request->input('ketepatanTwo'));
        $request->session()->put('responThree', $request->input('responThree'));
        $request->session()->put('layananFour', $request->input('layananFour'));
        $request->session()->put('pegawaiFive', $request->input('pegawaiFive'));
        $request->session()->put('etikaSix', $request->input('etikaSix'));

        return redirect()->route('four');
    }

    public function stepFour(Request $request)
    {
        // Store the phone number in the session
        $request->session()->put('simpulan', $request->input('simpulan'));
        $request->session()->put('saran', $request->input('saran'));

        // Store the data in the temporary database table
        TemporaryData::create([
            'email' => $request->session()->get('email'),
            'nama' => $request->session()->get('nama'),
            'kecepatan' => $request->session()->get('kecepatan'),
            'ketepatan' => $request->session()->get('ketepatan'),
            'respon' => $request->session()->get('respon'),
            'layanan' => $request->session()->get('layanan'),
            'pegawai' => $request->session()->get('pegawai'),
            'etika' => $request->session()->get('etika'),
            'kecepatanOne' => $request->session()->get('kecepatanOne'),
            'ketepatanTwo' => $request->session()->get('ketepatanTwo'),
            'responThree' => $request->session()->get('responThree'),
            'layananFour' => $request->session()->get('layananFour'),
            'pegawaiFive' => $request->session()->get('pegawaiFive'),
            'etikaSix' => $request->session()->get('etikaSix'),
            'simpulan' => $request->session()->get('simpulan'),
            'saran' => $request->session()->get('saran'),
        ]);

        // Clear the session data after storing it in the database
        $request->session()->forget(['email','nama','kecepatan','ketepatan','respon',
        'layanan','pegawai','etika','kecepatanOne','ketepatanTwo','responThree','layananFour',
        'pegawaiFive','etikaSix','simpulan','saran',]);

        return redirect()->route('sip');
    }

}
