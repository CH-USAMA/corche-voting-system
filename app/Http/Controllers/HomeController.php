<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Position;
use App\Models\Election;
use App\Models\Document;
class HomeController extends Controller
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
    public function index()
    {
        if(Auth::user()->role == 'Candidate')
        {

            return view('Candidate.homeCandidate');

        }else if(Auth::user()->role == 'Staff')
        {
            $docs = Document::where('added_by',Auth::user()->id)->latest()->get();
            return view('Staff.homeStaff',compact('docs'));

        }else{
                $position = Position::all();
                $Election = Election::all();
                return view('Admin..homeAdmin',compact('position','Election'));

        }

    }
}
