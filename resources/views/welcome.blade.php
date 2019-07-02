@extends("layouts.app")

@section("content")
@if(Auth::check())
<div class="row">
    <div class="col-12">
    <h3>登録日: 
<?php   $user_create = $user->created_at;
        $y = intval(substr($user_create,0,4));
        $m = intval(substr($user_create,5,2));
        $d = intval(substr($user_create,8,2));
        print $y."年".$m."月".$d."日".PHP_EOL;        
?></h3>
    </div>
    <aside class="col-xl-3 col-lg-4 col-md-5 mt-4 mb-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $user->name }}</h3>
            </div>
            <div class="card-body">
                <img class="rounded img-fluid" src="{{ Gravatar::src($user->email, 500) }}" alt="">
            </div>
        </div>
    </aside>
    
    <div class="col-xl-9 col-lg-8 col-md-7 mt-4 mb-4">
        <table class="table table-striped">
            <tr>
                <td>ダイエット前の体重</td>
                <th>{{ $user->weight}}</th>
                <td>Kg</td>
            </tr>
            <tr>
                <td>目標体重</td>
                <th>{{ $user->objective }}</th>
                <td>Kg</td>
            </tr>
            <tr>
                <th>目標消費カロリー</th>
                <th>{{ ($user->weight -$user->objective) * 7200 }}</th>
                <th>Kcal</th>
            </tr>
            <tr>
                <th>累計摂取カロリー</th>
                <th>{{ $sum_calorie }}</th>
                <th>Kcal</th>
            </tr>
            <tr>
                <th>累計消費カロリー</th>
                <th>{{ $use_calorie }}</th>
                <th>Kcal</th>
            </tr>
            <tr>
                <th>結果</th>
                @if($result > 0)
                <th style="color:#00ff00;">{{ $result }}</th>
                @else
                <th style="color:#ff0000;">{{ $result }}</th>
                @endif
                <th>Kcal</th>
            </tr>
            <tr>
                <th>目標消費カロリーまで</th>
                <th>{{ (($user->weight -$user->objective) * 7200) - $result }}</th>
                <th>Kcal</th>
            </tr>
            <tr>
                <th></th><th></th><th></th>
            </tr>
        </table>
    </div>
    <div class="col-12 ml-4">
    <h5>カロリーの登録、日毎の詳細については下記のカレンダーのリンクから飛んでください</h5>
    </div>
    
        <div class="col-12 col-sm-7 col-md-8 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">登録済みの日付一覧</h3>
                </div>
                <div class="card-body">
                    <?php
                    foreach($date as $date){
                        $ymd = $date;
                        $ymd =basename($ymd);
                        $y = intval(substr($ymd,0,4));
                        $m = intval(substr($ymd,5,2));
                        $d = intval(substr($ymd,8,2));
                        print $y."年".$m."月".$d."日".PHP_EOL;
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-5 col-md-4 mt-4">
        @include("calendar")
        </div>
</div>

@else
        <div class="center jumbotron">
            <div class="text-center">
                <h3>カロリーを日々管理し的確なダイエットを</h3>
                <h2>Calorie Management</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-1 col-md-2 col-12">
                <h4>機能1</h4>
            </div>
            <div class="col-lg-11 col-md-10 col-12">
                <h4>日々の摂取、消費カロリーを記録することで目標体重まであと何kcal消費すれば良いのか計算します。</h4>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-1 col-md-2 col-12">
                <h4>機能2</h4>
            </div>
            <div class="col-lg-11 col-md-10 col-12">
                <h4>毎日のダイエット記録をつけることが出来て、見返すことができます。</h4>
            </div>
        </div>
        <div class="row mt-4 mb-4">
            <div class="col-6 text-right mt-4">
                <h5>登録済みの方は</h5>
            </div>
            <div class="offset-1 col-5 mt-4">
                {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        <div class="row mt-4 mb-4">
            <div class="col-6 text-right mt-4">
                <h5>新規ユーザーは</h5>
            </div>
            <div class="offset-1 col-5 mt-4">
                {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection