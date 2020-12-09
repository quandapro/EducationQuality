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
        $programs = DB::select('select * from tieuchi_ctdt');
        return view('chuongtrinhdaotao.tieuchi_ctdt.index', compact('programs'));
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
            $program->ten_CTDT = $data['ten_CTDT'];
            $program->ngay_kd = $data['ngay_kd'];
            $program->ngayHetHan_kd = $data['ngayHetHan_kd'];
            $program->thoiHan = $data['thoiHan'];
            $program->vanBan_kd = $data['vanBan_kd'];
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
        $programs = DB::select ('select * from tieuchi_ctdt where id_CTDT = ?', [$id]);
        //dd($programs);
        return  view('chuongtrinhdaotao.tieuchi_ctdt.update', compact('programs'));
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
        $ten_CTDT = $request -> input('ten_CTDT');
        $ngay_kd = $request -> input('ngay_kd');
        $ngayHetHan_kd = $request -> input('ngayHetHan_kd');
        $thoiHan = $request -> input('thoiHan');
        $vanBan_kd = $request -> input('vanBan_kd');
        DB::update('update tieuchi_ctdt set ten_CTDT = ?, ngay_kd=?, ngayHetHan_kd=?,thoiHan=?, vanBan_kd = ? where id_CTDT = ?', [$ten_CTDT,$ngay_kd,$ngayHetHan_kd,$thoiHan,$vanBan_kd, $id]);
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
