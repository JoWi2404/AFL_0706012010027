<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'Players';
        $players = Player::all();
        return view('player', compact('players', 'title'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'Players';
        $teams = Team::all();
        return view('createPlayer', compact('teams', 'title'));
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
        $code = Str::upper(Str::substr($request -> player, 0, 3));

        Player::create([
            'code' => $request -> code,
            'player_name' => $request -> player_name,
            'player_age' => $request -> player_age,
            'player_type' => $request -> player_type

        ]);
        return redirect(route('player.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show($player)
    {
        //
        $player = Player::where('code', $player) -> first();
        $title = 'Players';
        return view('showplayer', compact('player','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit($player)
    {
        //
        $player = Player::findorFail($player);
        $title = 'Players';
        return view('editplayer', compact('player', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $player)
    {
        //
        $code = Str::upper(Str::substr($request -> project, 0, 3));
        $player = Player::findorFail($player);
        $player->update([
            'code' => $request -> code,
            'player_name' => $request -> player_name,
            'player_age' => $request -> player_age,
            'player_type' => $request -> player_type
        ]);
        return redirect(route('player.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy( $player)
    {
        //
      $player = Player::findorFail($player);
      $player ->delete();
      return redirect(route('player.index'));
    }
}
