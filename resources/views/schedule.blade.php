

@extends("layouts.app")

@section("content")

@if($table == 1)
{{ $user->name }}
{{ $table }}
@else
{{ $user->name }}
<h1>登録ページ</h1>

<div class="row">
    <div class="col-6">
        {!! Form::model($date,["route" => "store"]) !!}
            <div class="form-group">
                {!! Form::hidden("user_id","$user_id",["class" => "form-control"]) !!}    
            </div>
            
            <div class="form-group">
                {!! Form::hidden("date",$_GET["ymd"],["class" => "form-control"]) !!}
            </div>
            {!! Form::submit("登録する",["class" => "btn btn-primary"]) !!}
        {!! Form::close() !!}
    </div>
</div>
@endif
@endsection
