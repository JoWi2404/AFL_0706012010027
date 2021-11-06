@extends('layout.mainlayout')

@section('title' , 'Teams')
@section('pagetitle', 'Detail Team')

@section('main_content')
<div class="mt-4 p-5 bg-secondary text-white rounded">
    <h1>{{$team['team_name']}}</h1>
    <p>Team Code : {{$team['team_code']}}</p>
    <p>Country : {{$team['country']}} </p>
    <p>Achievements : {{$team['achievements']}}</p>
    <p>Coach : {{$team['coach']}}</p>
</div>

<div>
    <table class="table table-dark table-hover">
        <tr>
        <th>NO</th>
        <th>Code</th>
        <th>Name</th>
        <th>Age</th>
        <th>Player Type</th>
        </tr>
        @foreach ($team->players as $player)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$player['code']}}</td>
            <td>{{$player['player_name']}}</td>
            <td>{{$player['player_age']}}</td>
            <td>{{$player['player_type']}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection