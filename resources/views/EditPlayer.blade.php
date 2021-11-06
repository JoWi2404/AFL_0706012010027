@extends('layout.mainlayout')

@section('title', ' Edit Player Profile')
@section('main_content')

<form method="post" action="{{route ('player.update', $player ->id)}}">
    @csrf
  <input type="hidden" name="_method" value="PATCH">
 <div class="form-group">
  <label for="PlayertName">Player Name</label>
  <input type="text" name ="player_name" class="form-control" id="InputName"  placeholder="Enter Player Name" value="{{$player->player_name}}" required>
</div>
<div class="form-group">
  <label for="Age">Age of Player</label>
  <input type="text" name ="player_age" class="form-control" id="InputAge" placeholder="Enter Player's Age" value="{{$player->player_age}}" required>
</div>
<div class="form-group">
    <label for="tppe">Type of Player</label>
    <input type="text" name ="player_type" class="form-control" id="InputType" placeholder="Singles/Doubles" value="{{$player->player_type}}" required>
</div>
<div class="form-group">
  <label for="tppe">Team</label>
  <input type="text" name ="code" class="form-control" id="Inputcode" placeholder="Enter Team Name" value="{{$player->code}}" required>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection