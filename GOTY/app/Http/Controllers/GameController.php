<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{

    public function index()
    {
        $games = DB::table('games')->orderBy('id','desc')->paginate(10);

        return view('games', compact('games'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function show(Games $games)
    {
        return view('games.show', compact('games'));
    }

    public function create()
    {
        return view('games.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tahun' => 'required',
            'pengembang' => 'required',
            'penerbit' => 'required',
            'platform' => 'required',
        ]);

        Games::create($request->all());

        return redirect()->route('games.index')
            ->with('success', 'Games created successfully.');
    }


    public function edit(Games $game)
    {
        return view('games.edit', compact('game'));
    }


    public function update(Request $request, Games $game)
    {
        $request->validate([
            'judul' => 'required',
            'tahun' => 'required',
            'pengembang' => 'required',
            'penerbit' => 'required',
            'platform' => 'required',
        ]);

        $game->update($request->all());

        return redirect()->route('games.index')
            ->with('success', 'Games updated successfully');
    }

    public function destroy(Games $game)
    {
        $game->delete();

        return redirect()->route('games.index')
            ->with('success', 'Games deleted successfully');
    }
}