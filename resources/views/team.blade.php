@extends('layout.mainlayout')
@section('title', 'Team')

@section('main_content')
<h1>Lists of Teams</h1>

<div class="text-right">
    <a class="btn btn-success" href="{{route('team.create')}}">
    <i class="fas fa-arrow-alt-cirlce-right"></i>Add a new Team</a>
</div>

<table class="table table-dark table-hover">

    <tr>
        <th>NO</th>
        <th>Team Name</th>
        <th>Country</th>
        <th>Achievement</th>
        <th>Coach</th>
        <th class="text-right">Actions</th>
    </tr>

    @php($i = 0)
    @foreach($teams as $data)
    @php($i++)
    <tr>
        <td>{{$i}}</td>

        <td><a class="text-white" href="/team/{{$data['team_code']}}">{{$data['team_name']}}</a></td>

        <td>{{$data['country']}}</td>
        <td>{{$data['achievements']}}</td>
        <td>{{$data['coach']}}</td>

        <td class="text-center">
            <div class="d-grid gap-2 d-md-flex">
            <a class="btn btn-info" href="{{route('team.show',$data->team_code )}}">Show</a>
            <a class="btn btn-info" href="{{route('team.edit', $data->team_code)}}">Edit</a>
            <form action="{{route('team.destroy', $data->team_code)}}" method="POST"> 
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form> 
        </div>
        </td>
    </tr>
@endforeach
</table>  
@endsection