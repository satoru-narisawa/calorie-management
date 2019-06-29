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
        $id = DB::table("dates")->where("user_id",$user_id)->where("date",$_GET["ymd"])->get();
        
        foreach($id as $dates){
        $date = $dates->date;
        }
        
        $y = intval(substr($date,0,4));
        $m = intval(substr($date,5,7));
        $d = intval(substr($date,8,10));
        
        if($table == 1){
        foreach($id as $date_instance){
        $date_instance = $date_instance;
        }
        
        $day_food_calorie = $date_instance->food_calorie1 + $date_instance->food_calorie2 + $date_instance->food_calorie3
         + $date_instance->food_calorie4 + $date_instance->food_calorie5 + $date_instance->food_calorie6 + $date_instance->food_calorie7
          + $date_instance->food_calorie8 + $date_instance->food_calorie9 + $date_instance->food_calorie10;
          
        $day_use_calorie = $date_instance->basis_use_calorie + $date_instance->exercise_calorie1 + $date_instance->exercise_calorie2
         + $date_instance->exercise_calorie3 + $date_instance->exercise_calorie4 + $date_instance->exercise_calorie5;
         
        $day_result = $day_food_calorie - $day_use_calorie;

            
        return view("show",[
            "id" => $id,
            "user" => $user,
            "date" => $date,
            "y" => $y,
            "m" => $m,
            "d" => $d,
            "date_instance" => $date_instance,
            "day_food_calorie" => $day_food_calorie,
            "day_use_calorie" => $day_use_calorie,
            "day_result" => $day_result,
            "table" => $table,
            ]);
        }
        else{

        return view("schedule",[
            "date" => $date,
            "user_id" => $user_id,
            "table" => $table,
            "user" => $user,
            "id" => $id,
        ]);
        }
    }
    
    public function store(Request $request){
        $this->validate($request,[
            "basis_use_calorie" => "required","food_name1" => "max:15","food_name2" => "max:15","food_name3" => "max:15",
            "food_name4" => "max:15","food_name5" => "max:15","food_name6" => "max:15","food_name7" => "max:15",
            "food_name8" => "max:15","food_name9" => "max:15","food_name10" => "max:15",
            "exercise_name1" => "max:15","exercise_name2" => "max:15","exercise_name3" => "max:15","exercise_name4" => "max:15",
            "exercise_name5" => "max:15","caption" => "max:191",
            ]);
        
        $date = new Date;
        $date->date = $request->date;
        $date->user_id = $request->user_id;
        $date->basis_use_calorie = $request->basis_use_calorie;
        $date->food_name1 = $request->food_name1; $date->food_name2 = $request->food_name2; $date->food_name3 = $request->food_name3;
        $date->food_name4 = $request->food_name4;$date->food_name5 = $request->food_name5;$date->food_name6 = $request->food_name6;
        $date->food_name7 = $request->food_name7;$date->food_name8 = $request->food_name8;$date->food_name9 = $request->food_name9;
        $date->food_name10 = $request->food_name10;
        $date->food_calorie1 = $request->food_calorie1;$date->food_calorie2 = $request->food_calorie2;$date->food_calorie3 = $request->food_calorie3;
        $date->food_calorie4 = $request->food_calorie4;$date->food_calorie5 = $request->food_calorie5;$date->food_calorie6 = $request->food_calorie6;
        $date->food_calorie7 = $request->food_calorie7;$date->food_calorie8 = $request->food_calorie8;$date->food_calorie9 = $request->food_calorie9;
        $date->food_calorie10 = $request->food_calorie10;
        
        $date->exercise_name1 = $request->exercise_name1;$date->exercise_name2 = $request->exercise_name2;$date->exercise_name3 = $request->exercise_name3;
        $date->exercise_name4 = $request->exercise_name4;$date->exercise_name5 = $request->exercise_name5;
        $date->exercise_calorie1 = $request->exercise_calorie1;$date->exercise_calorie2 = $request->exercise_calorie2;
        $date->exercise_calorie3 = $request->exercise_calorie3;$date->exercise_calorie4 = $request->exercise_calorie4;
        $date->exercise_calorie5 = $request->exercise_calorie5;
        
        $date->caption = $request->caption;
        $date->save();
        
        
        return redirect("/");
    }
    

    

}
