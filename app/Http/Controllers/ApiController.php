<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use App\Models\Race;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function getRacesByFraction(Request $request)
    {
        $fractionId = $request->query('fraction_id');
        $races = Race::where('fraction_id', $fractionId)->get();

        if ($races->isEmpty()) {
            return response()->json(['message' => 'Нет рас для данного фракции.'], 404);
        }

        return response()->json(['races' => $races]);
    }
    public function getGradeByRace(Request $request)
    {
        $raceId = $request->query('race_id');

        $grades = DB::table('grade_race')
            ->join('grades', 'grades.id', '=', 'grade_race.grade_id')
            ->where('grade_race.race_id', $raceId)
            ->select('grades.*')
            ->get();

        if ($grades->isEmpty()) {

            return response()->json(['message' => 'Нет классов для данной расы.'], 404);
        }

        return response()->json(['grades' => $grades]);
    }


}

