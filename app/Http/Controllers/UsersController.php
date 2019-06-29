<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use DB;


class UsersController extends Controller
{
    public function index(){
        
        $user = \Auth::user();
        $user_id = \Auth::id();
        $food_calorie1 = DB::table("dates")->where("user_id",$user_id)->pluck("food_calorie1")->ToArray();
        $food_calorie2 = DB::table("dates")->where("user_id",$user_id)->pluck("food_calorie2")->ToArray();
        $food_calorie3 = DB::table("dates")->where("user_id",$user_id)->pluck("food_calorie3")->ToArray();
        $food_calorie4 = DB::table("dates")->where("user_id",$user_id)->pluck("food_calorie4")->ToArray();
        $food_calorie5 = DB::table("dates")->where("user_id",$user_id)->pluck("food_calorie5")->ToArray();
        $food_calorie6 = DB::table("dates")->where("user_id",$user_id)->pluck("food_calorie6")->ToArray();
        $food_calorie7 = DB::table("dates")->where("user_id",$user_id)->pluck("food_calorie7")->ToArray();
        $food_calorie8 = DB::table("dates")->where("user_id",$user_id)->pluck("food_calorie8")->ToArray();
        $food_calorie9 = DB::table("dates")->where("user_id",$user_id)->pluck("food_calorie9")->ToArray();
        $food_calorie10 = DB::table("dates")->where("user_id",$user_id)->pluck("food_calorie10")->ToArray();
        $basis_use_calorie = DB::table("dates")->where("user_id",$user_id)->pluck("basis_use_calorie")->ToArray();
        $exercise_calorie1 = DB::table("dates")->where("user_id",$user_id)->pluck("exercise_calorie1")->ToArray();
        $exercise_calorie2 = DB::table("dates")->where("user_id",$user_id)->pluck("exercise_calorie2")->ToArray();
        $exercise_calorie3 = DB::table("dates")->where("user_id",$user_id)->pluck("exercise_calorie3")->ToArray();
        $exercise_calorie4 = DB::table("dates")->where("user_id",$user_id)->pluck("exercise_calorie4")->ToArray();
        $exercise_calorie5 = DB::table("dates")->where("user_id",$user_id)->pluck("exercise_calorie5")->ToArray();
        
        $date = DB::table("dates")->where("user_id",$user_id)->pluck("date")->ToArray();
        
        $sum_calorie = 0;
        $use_calorie = 0;

        foreach($food_calorie1 as $food_calorie){
            $sum_calorie += $food_calorie;
        }
        foreach($food_calorie2 as $food_calorie){
            $sum_calorie += $food_calorie;
        }
        foreach($food_calorie3 as $food_calorie){
            $sum_calorie += $food_calorie;
        }
        foreach($food_calorie4 as $food_calorie){
            $sum_calorie += $food_calorie;
        }
        foreach($food_calorie5 as $food_calorie){
            $sum_calorie += $food_calorie;
        }
        foreach($food_calorie6 as $food_calorie){
            $sum_calorie += $food_calorie;
        }
        foreach($food_calorie7 as $food_calorie){
            $sum_calorie += $food_calorie;
        }
        foreach($food_calorie8 as $food_calorie){
            $sum_calorie += $food_calorie;
        }
        foreach($food_calorie9 as $food_calorie){
            $sum_calorie += $food_calorie;
        }
        foreach($food_calorie10 as $food_calorie){
            $sum_calorie += $food_calorie;
        }
        foreach($basis_use_calorie as $basis_use_calorie){
            $use_calorie += $basis_use_calorie;
        }
        foreach($exercise_calorie1 as $exercise_calorie){
            $use_calorie += $exercise_calorie;
        }
        foreach($exercise_calorie2 as $exercise_calorie){
            $use_calorie += $exercise_calorie;
        }
        foreach($exercise_calorie3 as $exercise_calorie){
            $use_calorie += $exercise_calorie;
        }
        foreach($exercise_calorie4 as $exercise_calorie){
            $use_calorie += $exercise_calorie;
        }
        foreach($exercise_calorie5 as $exercise_calorie){
            $use_calorie += $exercise_calorie;
        }
        
        $result = $use_calorie - $sum_calorie;


       return view("welcome",[
            "user" => $user,
            "sum_calorie" => $sum_calorie,
            "use_calorie" => $use_calorie,
            "result" =>  $result, 
            "date" => $date,
           ]);
    }
    public function data(){
        $date = $user->dates()->pluck("food_calorie1")->ToArray();
        
        return view("data",[
           "user" => $user,
           "date" => $date,
           ]);

    }
}
