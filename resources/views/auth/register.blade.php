@extends('layouts.app')

@section('content')
<div class="text-center">
        <h1>ユーザー登録</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'ユーザー名') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control',"placeholder" => "6文字以上"]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', '確認のためもう一度パスワードを入力してください') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control',"placeholder" => "6文字以上"]) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label("weight","現在体重") !!}
                    {!! Form::number("weight",old("weight"), ['class' => 'form-control',"placeholder" => "kg単位で数字のみ入力"]) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label("objective","目標体重") !!}
                    {!! Form::number("objective",old("objective"), ['class' => 'form-control',"placeholder" => "kg単位で数字のみ入力"]) !!}
                </div>

                {!! Form::submit('新規登録', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection