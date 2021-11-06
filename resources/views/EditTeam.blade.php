@extends('layout.mainlayout')

@section('title')
<title>Edit Team Detail</title>

@section('main_content')

<form method="post" action="{{route('team.update', $team->team_code)}}">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
     <div class="form-group">
        <label for="Team Name">Team Name </label>
        <input type="text" name ="team_name" class="form-control" id="Inputname"  placeholder="Enter Team Name" value="{{$team->team_name}}" required>
      </div>
      <div class="form-group">
        <label for="Team Code">Team Code </label>
        <input type="text" name ="team_code" class="form-control" id="Inputcode"  placeholder="Enter Team Code" value="{{$team->team_code}}" required>
      </div>
      <div class="form-group">
        <label for="Country">Country </label>
        <input type="text" name ="country" class="form-control" id="Inputcountry"  placeholder="Enter Country" value="{{$team->country}}" required>
      </div>
      <div class="form-group">
        <label for="Achievements">Achievements </label>
        <input type="text" name ="achievements" class="form-control" id="Inputachievement"  placeholder="Enter Achievements" value="{{$team->achievements}}" required>
      </div>
      <div class="form-group">
        <label for="Coach">Team Coach Name </label>
        <input type="text" name ="coach" class="form-control" id="Inputcoach"  placeholder="Enter Team Coach Name" value="{{$team->coach}}" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection