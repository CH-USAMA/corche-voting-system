<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PoliticalParty;

class PoliticalController extends Controller
{
    public function savePoliticalParty(Request $request)
    {
        $data = $request->all();
        $validator = \Validator::make($request->all(), [
            'Political_Party' => 'required',
            'party_level' => 'required',

        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
      
        // dd($request->all());
        PoliticalParty::create([
            'party_name' => $request->Political_Party,
            'party_level' => $request->party_level,
        ]);
        return response()->json(['success'=>'Political Party is successfully added']);

    }
    public function deletePoliticalPparty(Request $request) 
    {
        PoliticalParty::where('id',$request->get_id)->delete();
        return response()->json(['success'=>'Candidate is Deleted Successfully']);
    }
}
