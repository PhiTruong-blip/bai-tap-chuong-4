<?php

namespace App\Http\Controllers;

use App\Models\LopHoc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class LopHocController extends Controller
{
    public function index(){
        $data = LopHoc::paginate(5);
        return view('lop.index',compact('data'));
    }

    public function create(){
        return view('lop.create');
    }

    public function store(Request $req){
        LopHoc::create($req->all());
        return redirect('/classes');
    }

    public function edit($id){
        $lop = LopHoc::find($id);
        return view('lop.edit',compact('lop'));
    }

public function update(Request $req, $id){
    $lop = LopHoc::find($id);
    $lop->update($req->all());
    return redirect('/classes');
}

    public function destroy($id){
        LopHoc::destroy($id);
        return redirect('/classes');
    }
}