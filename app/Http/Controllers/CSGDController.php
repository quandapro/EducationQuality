<?php

namespace App\Http\Controllers;

use App\ChuongTrinhDaoTao;
use App\CoSoGiaoDuc;
use Illuminate\Http\Request;
use DB;

class CSGDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = DB::select('select * from cosogiaoduc');
        return view('cosogiaoduc.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cosogiaoduc.create');
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
            $program = new CoSoGiaoDuc;
            $program->ten_CSGD = $data['ten_CSGD'];
            $program->ngay_kd = $data['ngay_kd'];
            $program->ngayHetHan_kd = $data['ngayHetHan_kd'];
            $program->thoiHan = $data['thoiHan'];
            $program->save();
            return redirect('/view_CSGD_programs')->with('status', "Insert successfully");
        }
        catch(Exception $e){
            return redirect('/view_CSGD_programs')->with('failed',"operation failed");
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
        $programs = DB::select ('select * from cosogiaoduc where id_CSGD = ?', [$id]);
        //dd($programs);
        return  view('cosogiaoduc.update', compact('programs'));
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
        $ten_CSGD = $request -> input('ten_CSGD');
        $ngay_kd = $request -> input('ngay_kd');
        $ngayHetHan_kd = $request -> input('ngayHetHan_kd');
        $thoiHan = $request -> input('thoiHan');
        DB::update('update cosogiaoduc set ten_CSGD = ?, ngay_kd=?, ngayHetHan_kd=?,thoiHan=? where id_CSGD = ?', [$ten_CSGD,$ngay_kd,$ngayHetHan_kd,$thoiHan, $id]);
        return redirect('/view_CSGD_programs')->with('status', "Insert successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChuongTrinhDaoTao  $chuongTrinhDaoTao
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('cosogiaoduc')->where('id_CSGD', '=', $id)->delete();
        return redirect('/view_CSGD_programs')->with('status', "Insert successfully");
    }
}
