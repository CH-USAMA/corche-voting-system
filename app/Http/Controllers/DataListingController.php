<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Files;
use App\Models\ElectionDetails;
use App\Models\ElectionCandidate;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator; 

class DataListingController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function DataListing(Request $request)
    {
        
        $request->validate([
            'position' => 'required',
            'provincia' => 'required',
            'canton' => 'required',
            'circun' => 'required',
            'parroquia' => 'required',
            'zona' => 'required',
            'junta_no' => 'required',
        ]);
        // get valid votes 
        // get null votes
        // get blank votes
        // get total votes

        $matchThese = ['provincia' => $request->provincia, 'canton' => $request->canton,'parroquia' => $request->parroquia,'circun' => $request->circun,'zona' => $request->zona,'junta_no' => $request->junta_no ];
        $voting_data = Document::select(\DB::raw("SUM(valid_votes) as valid_votes,SUM(total_votes) as total_votes,SUM(blank_votes) as blank_votes,SUM(null_votes) as null_votes"))->where($matchThese)->get();
        // dd($results);
        foreach($voting_data as $vote)
        {
           $blank_votes = $vote->blank_votes;
           $valid_votes = $vote->valid_votes;
           $total_votes = $vote->total_votes;
           $null_votes  = $vote->null_votes;
        }
        // get count of document
        // get ids of document than sort them on the basis of votes all the users
        $document_ids = Document::select(\DB::raw("id"))->where($matchThese)->get();
        $doc_ids_Arr = array();
        foreach($document_ids as $doc_id)
        {
            $doc_ids_Arr[] = $doc_id->id;
        }
        $all_document_candidate = ElectionCandidate::whereIn('document_id', $doc_ids_Arr)->orderBy('candidate_votes', 'desc')->get();
        $doc_canidates_Arr = array();
        $doc_canidates_votes_Arr = array();

        foreach($all_document_candidate as $doc)
        {
            $doc_canidates_Arr[] = $doc->candidate_name;
            $doc_canidates_votes_Arr[] = $doc->candidate_votes;
        }
        $graph_candidates_name_array = implode(',', $doc_canidates_Arr);
        $graph_candidates_votes_array = implode(',', $doc_canidates_votes_Arr);
        // dd($graph_candidates_votes_array);
        return view('Candidate.DataListing',compact('graph_candidates_name_array','graph_candidates_votes_array','blank_votes','total_votes','null_votes','valid_votes','all_document_candidate'));
    }

    public function uploadDocument()
    {
        return view('Staff.uploadDocument');
    }
}
