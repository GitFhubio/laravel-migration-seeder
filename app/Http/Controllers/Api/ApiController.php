<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;
class ApiController extends Controller
{
  public function __invoke(){
    $team= Team::orderBy('id','asc')->first();
    // 1) sarebbe $team->toArray() ma il metodo json
    // riesce a serializzare partendo anche da un modello
    // 2)potrei prendere anche $teams=Team::all()
    // e funzionerebbe allo stesso modo
    return response()->json($team);

  }
}
