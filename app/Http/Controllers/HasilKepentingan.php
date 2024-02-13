<?php

namespace App\Http\Controllers;
use App\Models\FormOne;
use App\Models\FormTwo;
use App\Models\FormThree;
use App\Models\FormFour;
use App\Models\TemporaryData;
use App\Http\Requests\StoreHasilKepentinganRequest;
use App\Http\Requests\UpdateHasilKepentinganRequest;
use Illuminate\Http\Request;

class HasilKepentingan extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fone = TemporaryData::paginate(7);
        $ftwo = TemporaryData::paginate(7);
        $fthree = TemporaryData::paginate(7);
        $ffour = TemporaryData::paginate(7);
        return view('hasil',[ 'Form_One'=>$fone,'Form_Two'=>$ftwo, 'Form_Three'=>$fthree, 'Form_Four'=>$ffour]);
    }

    public function laporan(Request $request)
    {
        $ftwo = TemporaryData::paginate(7);
        $fthree = TemporaryData::paginate(7);
        $ffour = TemporaryData::paginate(7);
        return view('laporan',[ 'Form_Two'=>$ftwo, 'Form_Three'=>$fthree, 'Form_Four'=>$ffour]);
    }

    public function empat(Request $request)
    {
        $ftwo = TemporaryData::paginate(10);
        $fthree = TemporaryData::paginate(10);
        return view('soalkeempat',[ 'Form_Two'=>$ftwo, 'Form_Three'=>$fthree]);
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

