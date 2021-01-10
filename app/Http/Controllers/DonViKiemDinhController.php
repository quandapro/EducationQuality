<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\DonViKiemDinh;

class DonViKiemDinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = DB::select('select * from donvikiemdinh');
        return view('donvikiemdinh.index',['units'=>$units]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donvikiemdinh.create');
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
            $unit = new DonViKiemDinh;
            $unit->tenDonVi = $data['tenDonVi'];
            $unit->save();
            $units = DB::select('select * from donvikiemdinh');
            return view('donvikiemdinh.index',['units'=>$units])->with('status',"Thêm mới thành công");
        }
        catch(Exception $e){
            $inspections = DB::select('select * from nguoikd');
            return view('donvikiemdinh.index',['units'=>$units])->with('status',"Thêm mới thất bại");;
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
        $unit = DB::table('donvikiemdinh')->where('id_DVKD', $id)->get();
        //dd($inspection[0]);
        return view('donvikiemdinh.update',['unit'=>$unit[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $tenDonVi = $request->input('tenDonVi');
        DB::table('donvikiemdinh')
              ->where('id_DVKD', $id)
              ->update(
                  ['tenDonVi' => $tenDonVi]
        );
        $units = DB::select('select * from donvikiemdinh');
        return view('donvikiemdinh.index',['units'=>$units])->with('status',"Thay đổi thành công");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('donvikiemdinh')->where('id_DVKD', '=', $id)->delete();
        $units = DB::select('select * from donvikiemdinh');
        return view('donvikiemdinh.index',['units'=>$units]);
    }
}
