<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Players</title>
</head>
<body>
    @include('layout.navigation')
    <div class="container">
        <h2>
            Player List 
        </h2>

        <div class="text-right">
            <a class="btn btn-success" href="{{route('player.create')}}">
            <i class="fas fa-arrow-alt-circle-right"></i>Add a new Player</a>
        </div>

        <table class="table table-dark table-hover">
            <tr>
                <th>NO</th>
                <th>Team Code</th>
                <th>Name</th>
                <th>Age</th>
                <th>Player Type</th>
                <th class="text-right">Actions</th>
            </tr>

            @foreach ($players as $play)
            @php($loop->index)

            <tr> 
                <td>
                    {{$loop ->iteration}}
                </td>
                <td>
                   <a class="text-white" href="{{route ('team.show', $play->team->team_code)}}">{{$play->team->team_name}}</a>
                </td>
                <td>
                    {{$play ['player_name']}}
                </td>
                <td>
                    {{$play['player_age']}}
                </td>
                <td>
                    {{$play['player_type']}}
                </td>
                <td class="text-center">
                    <div class="d-grid gap-2 d-md-flex">
                    <a class="btn btn-info" href="{{route ('player.edit', $play->id)}}">Edit</a>
                    <form action="{{route ('player.destroy', $play->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                </td>
            </tr>
           @endforeach
          </table>
    </div>
</body>
</html>