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
        <h3 class="text-center mb-4">{{ $y }}年{{ $m }}月{{ $d }}日のカロリー詳細</h3>
        <table class="table table-striped">
            <tr>
                <td>摂取カロリー合計</td>
                <th>{{ $day_food_calorie }}</th>
                <td>Kcal</td>
            </tr>
            <tr>
                <td>消費カロリー合計</td>
                <th>{{ $day_use_calorie }}</th>
                <td>Kcal</td>
            </tr>
            <tr>
                <th>ダイエット結果</th>
                @if($day_result > 0)
                <th style="color:#ff0000;">{{ $day_result }}</th>
                @else
                <th style="color:#00ff00;">{{ $day_result }}</th>
                @endif
                <th>Kcal</th>
            </tr>
            <tr>
                <th></th><th></th><th></th>
            </tr>
        </table>
    </div>
    
    <div class="col-12 mt-4">
    <h3>カロリー摂取、消費量の詳細内容</h3>
    </div>
    <div class="col-12 mt-4">
        <table class="table table-striped">
            <tr>
                <th>食べ物名</th>
                <th>摂取カロリー</th>
                <th>運動名</th>
                <th>消費カロリー</th>
            </tr>
            <tr>
                <td>{{ $date_instance->food_name1 }}</td>
                <td>{{ $date_instance->food_calorie1 }} Kcal</td>
                <td>基礎代謝</td>
                <td>{{ $date_instance->basis_use_calorie }} Kcal</td>
            </tr>
            <tr>
                <td>{{ $date_instance->food_name2 }}</td>
                <td>{{ $date_instance->food_calorie2 }} Kcal</td>
                <td>{{ $date_instance->exercise_name1 }}</td>
                <td>{{ $date_instance->exercise_calorie1 }} Kcal</td>
            </tr>
            <tr>
                <td>{{ $date_instance->food_name3 }}</td>
                <td>{{ $date_instance->food_calorie3 }} Kcal</td>
                <td>{{ $date_instance->exercise_name2 }}</td>
                <td>{{ $date_instance->exercise_calorie2 }} Kcal</td>
            </tr>
            <tr>
                <td>{{ $date_instance->food_name4 }}</td>
                <td>{{ $date_instance->food_calorie4 }} Kcal</td>
                <td>{{ $date_instance->exercise_name3 }}</td>
                <td>{{ $date_instance->exercise_calorie3 }} Kcal</td>
            </tr>
            <tr>
                <td>{{ $date_instance->food_name5 }}</td>
                <td>{{ $date_instance->food_calorie5 }} Kcal</td>
                <td>{{ $date_instance->exercise_name4 }}</td>
                <td>{{ $date_instance->exercise_calorie4 }} Kcal</td>
            </tr>
            <tr>
                <td>{{ $date_instance->food_name6 }}</td>
                <td>{{ $date_instance->food_calorie6 }} Kcal</td>
                <td>{{ $date_instance->exercise_name5 }}</td>
                <td>{{ $date_instance->exercise_calorie5 }} Kcal</td>
            </tr>
            <tr>
                <td>{{ $date_instance->food_name7 }}</td>
                <td>{{ $date_instance->food_calorie7 }} Kcal</td>
                <td></td><td></td>
            </tr>
            <tr>
                <td>{{ $date_instance->food_name8 }}</td>
                <td>{{ $date_instance->food_calorie8 }} Kcal</td>
                <td></td><td></td>
            </tr>
            <tr>
                <td>{{ $date_instance->food_name9 }}</td>
                <td>{{ $date_instance->food_calorie9 }} Kcal</td>
                <td></td><td></td>
            </tr>
            <tr>
                <td>{{ $date_instance->food_name10 }}</td>
                <td>{{ $date_instance->food_calorie10 }} Kcal</td>
                <td></td><td></td>
            </tr>
            <tr><td></td><td></td><td></td><td></td></tr>
        </table>
    </div>
    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">日記</h3>
            </div>
            <div class="card-body">
                {{ $date_instance->caption }}
            </div>
        </div>
    </div>
</div>


@endsection