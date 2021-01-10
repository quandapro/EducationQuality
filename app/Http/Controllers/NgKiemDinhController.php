<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\NgKiemDinh;

class NgKiemDinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inspections = DB::select('select * from nguoikd');
        return view('nguoikiemdinh.index',['inspections'=>$inspections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nguoikiemdinh.create');
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
        try{
            $ngkiemdinh = new NgKiemDinh;
            $ngkiemdinh->id_user = $data['id_user'];
            $ngkiemdinh->full_name = $data['full_name'];
            $ngkiemdinh->ngaySinh = $data['ngaySinh'];
            $ngkiemdinh->queQuan = $data['queQuan'];
            $ngkiemdinh->id_DVKD = $data['id_DVKD'];
            $ngkiemdinh->save();
            $inspections = DB::select('select * from nguoikd');
            return view('nguoikiemdinh.index',['inspections'=>$inspections])->with('status',"Thêm mới thành công");
        }
        catch(Exception $e){
            $inspections = DB::select('select * from nguoikd');
            return view('nguoikiemdinh.index',['inspections'=>$inspections])->with('status',"Thêm mới thất bại");;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inspection = DB::table('nguoikd')->where('id_nguoiKD', $id)->get();
        //dd($inspection[0]);
        return view('nguoikiemdinh.update',['inspection'=>$inspection[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $full_name = $request->input('full_name');
        $queQuan = $request->input('queQuan');
        $id_DVKD = $request->input('id_DVKD');
        DB::table('nguoikd')
              ->where('id_nguoiKD', $id)
              ->update(
                  ['full_name' => $full_name,
                  'queQuan' => $queQuan,
                  'id_DVKD' => $id_DVKD]
        );
        $inspections = DB::select('select * from nguoikd');
        return view('nguoikiemdinh.index',['inspections'=>$inspections])->with('status',"Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('nguoikd')->where('id_nguoiKD', '=', $id)->delete();
        $inspections = DB::select('select * from nguoikd');
        return view('nguoikiemdinh.index',['inspections'=>$inspections]);
    }
}
