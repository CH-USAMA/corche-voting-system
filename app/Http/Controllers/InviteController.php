<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ElectionDetails;
use App\Models\PoliticalParty;


class InviteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tables()
    {
        $electionDetails = ElectionDetails::latest()->get();
        return view('Admin.electionTable',compact('electionDetails'));
    }
    public function candidateElection()
    {
        $electionDetails = ElectionDetails::latest()->get();
        return view('Admin.electionCandidate',compact('electionDetails'));
    }
    public function PPElection()
    {
        $PoliticalParty = PoliticalParty::all();
        return view('Admin.electionPolitical',compact('PoliticalParty'));
    }
}
