@extends("layouts.app")

@section("content")

<div class="row">
    <aside class="col-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $user->name }}</h3>
            </div>
            <div class="card-body">
                <img class="rounded img-fluid" src="{{ Gravatar::src($user->email, 500) }}" alt="">
            </div>
        </div>
    </aside>
    
    <div class="col-9">
        <h3 class="text-center mb-4">今までのカロリー詳細（登録日）{{$user->created_at}}</h3>
        <table class="table">
            <tr>
                <td>ダイエット前の体重</td>
                <th>{{ $user->weight}}</th>
                <td>Kg</td>
            </tr>
            <tr>
                <td>目標体重</td>
                <th>{{ $user->objective }}</th>
                <td>Kcal</td>
            </tr>
            <tr>
                <th>目標消費カロリー</th>
                <th>{{ ($user->weight -$user->objective) * 7200 }}</th>
                <th>Kcal</th>
            </tr>
            <tr>
                <th>今までの消費カロリー</th>
                <th>{{ $user->name }}</th>
                <th>Kcal</th>
            </tr>
            <tr>
                <th>目標消費カロリーまで</th>
                <th></th>
                <th>Kcal</th>
            </tr>
            <tr>
                <th></th><th></th><th></th>
            </tr>
        </table>
    </div>
    
    <div class="col-12 mt-4 ml-4">
    <h5>カロリーの登録、日毎の詳細については下記のカレンダーのリンクから飛んでください</h5>
    </div>
    
    <div class="col-3 mt-4">
    @include("calendar")
    </div>

@endsection