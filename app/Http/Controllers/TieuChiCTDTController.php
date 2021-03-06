<?php

namespace App\Http\Controllers;

use App\TieuChiCTDT;
use Illuminate\Http\Request;
use DB;

class TieuChiCTDTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($id);
        //$programs = DB::select('select * from tieuchi_ctdt');
        //dd($programs);
        //return view('chuongtrinhdaotao.tieuchi_ctdt.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chuongtrinhdaotao.tieuchi_ctdt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        try {
            $program = new TieuChiCTDT;
            $program->tieuChi1_1 = $data['tieuChi1_1'];
            $program->tieuChi1_2 = $data['tieuChi1_2'];
            $program->tieuChi1_3 = $data['tieuChi1_3'];
            $program->tieuChi2_1 = $data['tieuChi2_1'];
            $program->tieuChi2_2 = $data['tieuChi2_2'];
            $program->tieuChi2_3 = $data['tieuChi2_3'];
            $program->tieuChi3_1 = $data['tieuChi3_1'];
            $program->tieuChi3_2 = $data['tieuChi3_2'];
            $program->tieuChi3_3 = $data['tieuChi3_3'];
            $program->tieuChi4_1 = $data['tieuChi4_1'];
            $program->tieuChi4_2 = $data['tieuChi4_2'];
            $program->tieuChi4_3 = $data['tieuChi4_3'];
            $program->tieuChi5_1 = $data['tieuChi5_1'];
            $program->tieuChi5_2 = $data['tieuChi5_2'];
            $program->tieuChi5_3 = $data['tieuChi5_3'];
            $program->tieuChi5_4 = $data['tieuChi5_4'];
            $program->tieuChi5_5 = $data['tieuChi5_5'];
            $program->tieuChi6_1 = $data['tieuChi6_1'];
            $program->tieuChi6_2 = $data['tieuChi6_2'];
            $program->tieuChi6_3 = $data['tieuChi6_3'];
            $program->tieuChi6_4 = $data['tieuChi6_4'];
            $program->tieuChi6_5 = $data['tieuChi6_5'];
            $program->tieuChi6_6 = $data['tieuChi6_6'];
            $program->tieuChi6_7 = $data['tieuChi6_7'];
            $program->tieuChi7_1 = $data['tieuChi7_1'];
            $program->tieuChi7_2 = $data['tieuChi7_2'];
            $program->tieuChi7_3 = $data['tieuChi7_3'];
            $program->tieuChi7_4 = $data['tieuChi7_4'];
            $program->tieuChi7_5 = $data['tieuChi7_5'];
            $program->tieuChi8_1 = $data['tieuChi8_1'];
            $program->tieuChi8_2 = $data['tieuChi8_2'];
            $program->tieuChi8_3 = $data['tieuChi8_3'];
            $program->tieuChi8_4 = $data['tieuChi8_4'];
            $program->tieuChi8_5 = $data['tieuChi8_5'];
            $program->tieuChi9_1 = $data['tieuChi9_1'];
            $program->tieuChi9_2 = $data['tieuChi9_2'];
            $program->tieuChi9_3 = $data['tieuChi9_3'];
            $program->tieuChi9_4 = $data['tieuChi9_4'];
            $program->tieuChi9_5 = $data['tieuChi9_5'];
            $program->tieuChi10_1 = $data['tieuChi10_1'];
            $program->tieuChi10_2 = $data['tieuChi10_2'];
            $program->tieuChi10_3 = $data['tieuChi10_3'];
            $program->tieuChi10_4 = $data['tieuChi10_4'];
            $program->tieuChi10_5 = $data['tieuChi10_5'];
            $program->tieuChi10_6 = $data['tieuChi10_6'];
            $program->tieuChi11_1 = $data['tieuChi11_1'];
            $program->tieuChi11_2 = $data['tieuChi11_2'];
            $program->tieuChi11_3 = $data['tieuChi11_3'];
            $program->tieuChi11_4 = $data['tieuChi11_4'];
            $program->tieuChi11_5 = $data['tieuChi11_5'];
            $program->save();
            return redirect('/view_TC_CTDT_programs')->with('status', "Insert successfully");
        }
        catch(Exception $e){
            return redirect('/view_TC_CTDT_programs')->with('failed',"operation failed");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChuongTrinhDaoTao  $chuongTrinhDaoTao
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programs = DB::table('tieuchi_CTDT')
            ->where('id_CTDT', 'like', $id)
            ->get();
        //dd($programs);
        return view('chuongtrinhdaotao.tieuchi_ctdt.index')->with('programs', $programs);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChuongTrinhDaoTao  $chuongTrinhDaoTao
     * @return \Illuminate\Http\Response
     */
    public function edit(ChuongTrinhDaoTao $chuongTrinhDaoTao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChuongTrinhDaoTao  $chuongTrinhDaoTao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tieuChi1_1 = $request -> input('tieuChi1_1');
        $tieuChi1_2 = $request -> input('tieuChi1_2');
        $tieuChi1_3 = $request -> input('tieuChi1_3');
        $tieuChi2_1 = $request -> input('tieuChi2_1');
        $tieuChi2_2 = $request -> input('tieuChi2_2');
        $tieuChi2_3 = $request -> input('tieuChi2_3');
        $tieuChi3_1 = $request -> input('tieuChi3_1');
        $tieuChi3_2 = $request -> input('tieuChi3_2');
        $tieuChi3_3 = $request -> input('tieuChi3_3');
        $tieuChi4_1 = $request -> input('tieuChi4_1');
        $tieuChi4_2 = $request -> input('tieuChi4_2');
        $tieuChi4_3 = $request -> input('tieuChi4_3');
        $tieuChi5_1 = $request -> input('tieuChi5_1');
        $tieuChi5_2 = $request -> input('tieuChi5_2');
        $tieuChi5_3 = $request -> input('tieuChi5_3');
        $tieuChi5_4 = $request -> input('tieuChi5_4');
        $tieuChi5_5 = $request -> input('tieuChi5_5');
        $tieuChi6_1 = $request -> input('tieuChi6_1');
        $tieuChi6_2 = $request -> input('tieuChi6_2');
        $tieuChi6_3 = $request -> input('tieuChi6_3');
        $tieuChi6_4 = $request -> input('tieuChi6_4');
        $tieuChi6_5 = $request -> input('tieuChi6_5');
        $tieuChi6_6 = $request -> input('tieuChi6_6');
        $tieuChi6_7 = $request -> input('tieuChi6_7');
        $tieuChi7_1 = $request -> input('tieuChi7_1');
        $tieuChi7_2 = $request -> input('tieuChi7_2');
        $tieuChi7_3 = $request -> input('tieuChi7_3');
        $tieuChi7_4 = $request -> input('tieuChi7_4');
        $tieuChi7_5 = $request -> input('tieuChi7_5');
        $tieuChi8_1 = $request -> input('tieuChi8_1');
        $tieuChi8_2 = $request -> input('tieuChi8_2');
        $tieuChi8_3 = $request -> input('tieuChi8_3');
        $tieuChi8_4 = $request -> input('tieuChi8_4');
        $tieuChi8_5 = $request -> input('tieuChi8_5');
        $tieuChi9_1 = $request -> input('tieuChi9_1');
        $tieuChi9_2 = $request -> input('tieuChi9_2');
        $tieuChi9_3 = $request -> input('tieuChi9_3');
        $tieuChi9_4 = $request -> input('tieuChi9_4');
        $tieuChi9_5 = $request -> input('tieuChi9_5');
        $tieuChi10_1 = $request -> input('tieuChi10_1');
        $tieuChi10_2 = $request -> input('tieuChi10_2');
        $tieuChi10_3 = $request -> input('tieuChi10_3');
        $tieuChi10_4 = $request -> input('tieuChi10_4');
        $tieuChi10_5 = $request -> input('tieuChi10_5');
        $tieuChi10_6 = $request -> input('tieuChi10_6');
        $tieuChi11_1 = $request -> input('tieuChi11_1');
        $tieuChi11_2 = $request -> input('tieuChi11_2');
        $tieuChi11_3 = $request -> input('tieuChi11_3');
        $tieuChi11_4 = $request -> input('tieuChi11_4');
        $tieuChi11_5 = $request -> input('tieuChi11_5');

        DB::update('update tieuchi_ctdt set tieuChi1_1 = ?, tieuChi1_2 = ?, tieuChi1_3 = ?, tieuChi2_1 = ?, tieuChi2_2 = ?, tieuChi2_3 = ?, tieuChi3_1 = ?, tieuChi3_2 = ?, tieuChi3_3 = ?, tieuChi4_1 = ?, tieuChi4_2 = ?, tieuChi4_3 = ?, tieuChi5_1 = ?, tieuChi5_2 = ?, tieuChi5_3 = ?, tieuChi5_4 = ?, tieuChi5_5 = ?, tieuChi6_1 = ?, tieuChi6_2 = ?, tieuChi6_3 = ?, tieuChi6_4 = ?, tieuChi6_5 = ?, tieuChi6_6 = ?, tieuChi6_7 = ?, tieuChi7_1 = ?, tieuChi7_2 = ?, tieuChi7_3 = ?, tieuChi7_4 = ?, tieuChi7_5 = ?, tieuChi8_1 = ?, tieuChi8_2 = ?, tieuChi8_3 = ?, tieuChi8_4 = ?, tieuChi8_5 = ?, tieuChi9_1 = ?, tieuChi9_2 = ?, tieuChi9_3 = ?, tieuChi9_4 = ?, tieuChi9_5 = ?, tieuChi10_1 = ?, tieuChi10_2 = ?, tieuChi10_3 = ?, tieuChi10_4 = ?, tieuChi10_5 = ?, tieuChi10_6 = ?, tieuChi11_1 = ?, tieuChi11_2 = ?, tieuChi11_3 = ?, tieuChi11_4 = ?, tieuChi11_5 = ? where id_CTDT = ?', [ $tieuChi1_1, $tieuChi1_2, $tieuChi1_3, $tieuChi2_1, $tieuChi2_2, $tieuChi2_3,  $tieuChi3_1, $tieuChi3_2, $tieuChi3_3, $tieuChi4_1, $tieuChi4_2, $tieuChi4_3, $tieuChi5_1, $tieuChi5_2, $tieuChi5_3, $tieuChi5_4, $tieuChi5_5, $tieuChi6_1, $tieuChi6_2, $tieuChi6_3, $tieuChi6_4, $tieuChi6_5, $tieuChi6_6, $tieuChi6_7, $tieuChi7_1, $tieuChi7_2, $tieuChi7_3, $tieuChi7_4, $tieuChi7_5, $tieuChi8_1, $tieuChi8_2, $tieuChi8_3, $tieuChi8_4, $tieuChi8_5, $tieuChi9_1, $tieuChi9_2, $tieuChi9_3, $tieuChi9_4, $tieuChi9_5, $tieuChi10_1, $tieuChi10_2, $tieuChi10_3, $tieuChi10_4, $tieuChi10_5, $tieuChi10_6, $tieuChi11_1, $tieuChi11_2, $tieuChi11_3, $tieuChi11_4, $tieuChi11_5, $id]);
        return redirect('/view_TC_CTDT_programs')->with('status', "Insert successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChuongTrinhDaoTao  $chuongTrinhDaoTao
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tieuchi_ctdt')->where('id_CTDT', '=', $id)->delete();
        return redirect('/view_TC_CTDT_programs')->with('status', "Delete successfully");
    }
}
