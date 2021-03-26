<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;
class ApiController extends Controller
{
public function __invoke(){

$team= Team::orderBy('id','asc')->first();
return response()->json($team);

}
}
