<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Date;
use DB;

class DateController extends Controller
{
    public function create(){
        $date = new Date;
        $user = \Auth::user();
        $user_id = \Auth::id();
        //datesテーブルのuser_idカラムがログインユーザーのidと一致し、　かつ　dateカラムが存在する場合1を返す
        $table = DB::table("dates")->where("user_id",$user_id)->where("date",$_GET["ymd"])->exists();

        return view("schedule",[
            "date" => $date,
            "user_id" => $user_id,
            "table" => $table,
            "user" => $user,
        ]);
    }
    
    public function store(Request $request){
        $date = new Date;
        $date->date = $request->date;
        $date->user_id = $request->user_id;
        $date->save();
        
        return redirect("/");
    }
    
    
    //一覧表示
//    public function show($id){
//        $data = [];
//        if(\Auth::check()){
//            
//            $user = \Auth::user();
//            $dates = new Date;
            

//            $data = [
//                "user" => $user,
//                "dates" => $dates,
//                ];
//        }
//        return view("schedule",$data);
//    }
}
