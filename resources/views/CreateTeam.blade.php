@extends('layout.mainlayout')
    

@section('title', 'Add New Team')

@section('main_content')

<form method="post" action="{{route('team.store')}}">
@csrf
 <div class="form-group">
    <label for="Team Name">Team Name </label>
    <input type="text" name ="team_name" class="form-control" id="Inputname"  placeholder="Enter Team Name">
  </div>
  <div class="form-group">
    <label for="Team Code">Team Code </label>
    <input type="text" name ="team_code" class="form-control" id="Inputcode"  placeholder="Enter Team Code">
  </div>
  <div class="form-group">
    <label for="Country">Country </label>
    <input type="text" name ="country" class="form-control" id="Inputcountry"  placeholder="Enter Country">
  </div>
  <div class="form-group">
    <label for="Achievements">Achievements </label>
    <input type="text" name ="achievements" class="form-control" id="Inputachievement"  placeholder="Enter Achievements">
  </div>
  <div class="form-group">
    <label for="Coach">Team Coach Name </label>
    <input type="text" name ="coach" class="form-control" id="Inputcoach"  placeholder="Enter Team Coach Name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection