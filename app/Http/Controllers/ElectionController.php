<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Election;
use App\Models\Position;
use Redirect;


class ElectionController extends Controller
{
    public function creatElection(Request $request)
    {
        $data = $request->all();
        if($data['Positions']=='null')
        {
            $data['Positions'] = null;
        }
        $validator = Validator::make($data, [
            'name_of_election'  => 'required',
            'start_date'  => 'required',
            'start_time'  => 'required',
            'end_date'    => 'required',
            'end_time'    => 'required',
            'Positions'   => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        else {
                $election = Election::create([
                    'election_name'     => $data['name_of_election'],
                    'start_date'        => $data['start_date'],
                    'end_date'          => $data['start_time'],
                    'start_time'        => $data['end_date'],
                    'end_time'          => $data['end_time'],
                    'election_position' => $data['Positions'],
                    'status'            => 'in-process',
                ]);
                // $election->save();
                return Redirect::back();
        }

    }
    public function addPosition(Request $request)
    {
        $data = $request->all();
        $position = Position::create([
            'position_val'     => $data['value'],
        ]);
        return Redirect::back();

    }
}
