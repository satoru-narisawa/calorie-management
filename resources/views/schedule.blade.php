<?php
$ymd =basename($_GET["ymd"]);
$y = intval(substr($ymd,0,4));
$m = intval(substr($ymd,4,2));
$d = intval(substr($ymd,6,2));

?>


@extends("layouts.app")

@section("content")

<h3>{{ $y }}年{{ $m }}月{{ $d }}日{{ $user->name }}さんの登録ページ</h3>

{!! Form::model($date,["route" => "store"]) !!}

基礎代謝　※必須！　
<div class="row pb-4">
    <div class="col-6">
        {!! Form::number("basis_use_calorie",old("basis_use_calorie"),["class"=>"form-control","placeholder" => "数字のみ入力。単位はkcalで"]) !!}
    </div>
</div>
<div class="row">
    <div class="col-6">
        <h3>摂取カロリー</h3>
    </div>
        <div class="col-6">
        <h3>消費カロリー</h3>
    </div>
</div>

<div class="row">
    <div class="col-3">
        <div>
            {!! Form::label("food_name1","食べ物1") !!}
            {!! Form::text("food_name1",old("food_name1"),["class"=>"form-control","placeholder" => "食べ物名を入力"]) !!}
        </div>
        <div>
            {!! Form::label("food_name2","食べ物2") !!}
            {!! Form::text("food_name2",old("food_name2"),["class"=>"form-control","placeholder" => "食べ物名を入力"]) !!}
        </div>
        <div>
            {!! Form::label("food_name3","食べ物3") !!}
            {!! Form::text("food_name3",old("food_name3"),["class"=>"form-control","placeholder" => "食べ物名を入力"]) !!}
        </div>
        <div>
            {!! Form::label("food_name4","食べ物4") !!}
            {!! Form::text("food_name4",old("food_name4"),["class"=>"form-control","placeholder" => "食べ物名を入力"]) !!}
        </div>
        <div>
            {!! Form::label("food_name5","食べ物5") !!}
            {!! Form::text("food_name5",old("food_name5"),["class"=>"form-control","placeholder" => "食べ物名を入力"]) !!}
        </div>
        <div>
            {!! Form::label("food_name6","食べ物6") !!}
            {!! Form::text("food_name6",old("food_name6"),["class"=>"form-control","placeholder" => "食べ物名を入力"]) !!}
        </div>
        <div>
            {!! Form::label("food_name7","食べ物7") !!}
            {!! Form::text("food_name7",old("food_name7"),["class"=>"form-control","placeholder" => "食べ物名を入力"]) !!}
        </div>
        <div>
            {!! Form::label("food_name8","食べ物8") !!}
            {!! Form::text("food_name8",old("food_name8"),["class"=>"form-control","placeholder" => "食べ物名を入力"]) !!}
        </div>
        <div>
            {!! Form::label("food_name9","食べ物9") !!}
            {!! Form::text("food_name9",old("food_name9"),["class"=>"form-control","placeholder" => "食べ物名を入力"]) !!}
        </div>
        <div>
            {!! Form::label("food_name10","食べ物10") !!}
            {!! Form::text("food_name10",old("food_name10"),["class"=>"form-control","placeholder" => "食べ物名を入力"]) !!}
        </div>
    </div>
    
    <div class="col-2"> 
        <div>
            {!! Form::label("food_calorie1","食べ物1のカロリー") !!}
            {!! Form::number("food_calorie1",old("food_calorie1"),["class" => "form-control","placeholder" => "kcal"]) !!}
        </div>
        <div>
            {!! Form::label("food_calorie2","食べ物2のカロリー") !!}
            {!! Form::number("food_calorie2",old("food_calorie2"),["class" => "form-control","placeholder" => "kcal"]) !!}
        </div>
        <div>
            {!! Form::label("food_calorie3","食べ物3のカロリー") !!}
            {!! Form::number("food_calorie3",old("food_calorie3"),["class" => "form-control","placeholder" => "kcal"]) !!}
        </div>
        <div>
            {!! Form::label("food_calorie4","食べ物4のカロリー") !!}
            {!! Form::number("food_calorie4",old("food_calorie4"),["class" => "form-control","placeholder" => "kcal"]) !!}
        </div>
        <div>
            {!! Form::label("food_calorie5","食べ物5のカロリー") !!}
            {!! Form::number("food_calorie5",old("food_calorie5"),["class" => "form-control","placeholder" => "kcal"]) !!}
        </div>
        <div>
            {!! Form::label("food_calorie6","食べ物6のカロリー") !!}
            {!! Form::number("food_calorie6",old("food_calorie6"),["class" => "form-control","placeholder" => "kcal"]) !!}
        </div>
        <div>
            {!! Form::label("food_calorie7","食べ物7のカロリー") !!}
            {!! Form::number("food_calorie7",old("food_calorie7"),["class" => "form-control","placeholder" => "kcal"]) !!}
        </div>
        <div>
            {!! Form::label("food_calorie8","食べ物8のカロリー") !!}
            {!! Form::number("food_calorie8",old("food_calorie8"),["class" => "form-control","placeholder" => "kcal"]) !!}
        </div>
        <div>
            {!! Form::label("food_calorie9","食べ物9のカロリー") !!}
            {!! Form::number("food_calorie9",old("food_calorie9"),["class" => "form-control","placeholder" => "kcal"]) !!}
        </div>
        <div>
            {!! Form::label("food_calorie10","食べ物10のカロリー") !!}
            {!! Form::number("food_calorie10",old("food_calorie10"),["class" => "form-control","placeholder" => "kcal"]) !!}
        </div>
    </div>
    

    <div class="offset-1 col-3">
        <div>
            {!! Form::label("exercise_name1","運動1") !!}
            {!! Form::text("exercise_name1",old("exercise_name1"),["class" => "form-control","placeholder" => "運動名を入力"]) !!}
        </div>
        <div>
            {!! Form::label("exercise_name2","運動2") !!}
            {!! Form::text("exercise_name2",old("exercise_name2"),["class" => "form-control","placeholder" => "運動名を入力"]) !!}
        </div>
        <div>
            {!! Form::label("exercise_name3","運動3") !!}
            {!! Form::text("exercise_name3",old("exercise_name3"),["class" => "form-control","placeholder" => "運動名を入力"]) !!}
        </div>
        <div>
            {!! Form::label("exercise_name4","運動4") !!}
            {!! Form::text("exercise_name4",old("exercise_name4"),["class" => "form-control","placeholder" => "運動名を入力"]) !!}
        </div>
        <div>
            {!! Form::label("exercise_name5","運動5") !!}
            {!! Form::text("exercise_name5",old("exercise_name5"),["class" => "form-control","placeholder" => "運動名を入力"]) !!}
        </div>
    </div>
    
    <div class="col-2">
        <div>
            {!! Form::label("exercise_calorie1","運動1の消費カロリー") !!}
            {!! Form::text("exercise_calorie1",old("exercise_calorie1"),["class" => "form-control","placeholder" => "kcal"]) !!}
        </div>
        <div>
            {!! Form::label("exercise_calorie2","運動2の消費カロリー") !!}
            {!! Form::text("exercise_calorie2",old("exercise_calorie2"),["class" => "form-control","placeholder" => "kcal"]) !!}
        </div>
        <div>
            {!! Form::label("exercise_calorie3","運動3の消費カロリー") !!}
            {!! Form::text("exercise_calorie3",old("exercise_calorie3"),["class" => "form-control","placeholder" => "kcal"]) !!}
        </div>
        <div>
            {!! Form::label("exercise_calorie4","運動4の消費カロリー") !!}
            {!! Form::text("exercise_calorie4",old("exercise_calorie4"),["class" => "form-control","placeholder" => "kcal"]) !!}
        </div>
        <div>
            {!! Form::label("exercise_calorie5","運動5の消費カロリー") !!}
            {!! Form::text("exercise_calorie5",old("exercise_calorie5"),["class" => "form-control","placeholder" => "kcal"]) !!}
        </div>
    </div>
</div>

<div class="row pt-4">
    <div class="col-12">
        <div class="form-group">
            {!! Form::label("caption","日記") !!}
            {!! Form::textarea("caption",old("caption"),["class" => "form-control","placeholder" => "191文字まで"]) !!}
        </div>
    </div>
</div>

        
        
        
        <div class="form-group">
            {!! Form::hidden("user_id","$user_id",["class" => "form-control"]) !!}    
        </div>
            
        <div class="form-group">
            {!! Form::hidden("date",$_GET["ymd"],["class" => "form-control"]) !!}
        </div>
    
    <div class="row">
        <div class="col-12">
            <a style="color:red;">※注意 製作者の技術不足及び設計ミス、その他諸事情により一度登録すると削除、更新ができません( ；∀；)<br>
            大変不便ですが、登録する際はお間違えのないようご確認ください
            <br>悔しい( ；∀；)</a>
        </div>
    </div>    
    {!! Form::submit("登録する",["class" => "btn btn-primary"]) !!}
{!! Form::close() !!}
@endsection
