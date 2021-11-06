@extends('layout.mainlayout')
    
{{-- <title>Add New Player</title> --}}
@section('title', 'Add New Player')
    

@section('main_content')

<form method="post" action="{{route ('player.store')}}">
      @csrf
   <div class="form-group">
    <label for="PlayertName">Player Name</label>
    <input type="text" name ="player_name" class="form-control" id="InputName"  placeholder="Enter Player Name">
  </div>
  <div class="form-group">
    <label for="Age">Age of Player</label>
    <input type="text" name ="player_age" class="form-control" id="InputAge" placeholder="Enter Player's Age">
  </div>
  <div class="form-group">
      <label for="tppe">Type of Player</label>
      <select type="text" name ="player_type" class="form-control form-select" id="InputType" placeholder="Singles/Doubles">
        <option>Single</option>
        <option>Double</option>
      </select>
  </div>
  <div class="form-group">
    <label for="tppe">Team</label>
    <select type="text" name ="code" class="form-control form-select" id="Inputcode" placeholder="Enter Team Name">
      @foreach($teams as $data)
      <option value="{{$data['team_code']}}">{{$data['team_name']}}</option>
      @endforeach
      </select> 
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection