<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'Teams';
        $teams = Team::all();
        return view('team', compact('teams', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'Teams';
        $teams = Team::all();
        return view('createTeam', compact('teams','title'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $no = Str::upper(Str::substr($request ->teams, 0, 3));

        Team::create([
            'team_name' => $request -> team_name,
            'team_code' => $request -> team_code,
            'country' => $request -> country,
            'achievements' => $request -> achievements,
            'coach' => $request -> coach
        ]);

        return redirect(route('team.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($team)
    {
        //
        $title = 'Teams';
        $team = Team::where('team_code', $team) -> first();
        return view('showteam', compact('team','title'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($team)
    {
        //
        $title = 'Teams';
        $team = Team::where('team_code',$team)->first();
        return view('editteam' , compact('team','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$code)
    {
        //
        $data = Str::upper(Str::substr($request ->teams , 0 , 3));
        $teams = Team::where('team_code',$request ->team_code) ->first();
        $teams -> update([
            'team_code' => $request -> team_code,
            'team_name' => $request -> team_name,
            'country' => $request -> country,
            'achievements' => $request -> achievements,
            'coach' => $request -> coach

        ]);
        // Team::where('team_code', $team) -> update($teams);
        return redirect(route('team.index'));   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($team)
    {
        //
        Team::where('team_code', $team) ->delete();
        return redirect(route('team.index'));
    }
}
