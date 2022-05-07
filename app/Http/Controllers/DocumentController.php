<?php

namespace App\Http\Controllers;
use App\Models\Document;
use App\Models\Files;
use App\Models\ElectionDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator; 

class DocumentController extends Controller
{
    //
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function uploadDocumentsave(Request $request)
    {

         dd($request->all());
        $request->validate([
            'doc_name' => 'required',
            'position' => 'required',
            'provincia' => 'required',
            'canton' => 'required',
            'circun' => 'required',
            'parroquia' => 'required',
            'zona' => 'required',
            'junta_no' => 'required',
            'valid_votes' => 'required|numeric',
            'blank_votes' => 'required|numeric',
            'null_votes' => 'required|numeric',
            'doc_start_time' => 'required',
            'doc_end_time' => 'required',
            'comments' => 'required',
            'filenames' => 'required',
            'filenames.*' => 'image'
        ]);
        // mimes:csv,txt,xlx,xls,pdf
        // $request->validate([
        //     'files' => 'required',
        //     'files.*' => 'required|mimes:pdf,xlx,csv|max:2048',
        // ]);

        $files = [];
        if($request->hasfile('filenames'))
         {
            foreach($request->file('filenames') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('doc_images'), $name);  
                $files[] = $name;  
            }
         }
      
        // dd($files);
        // if ($validator->fails())
        // {
        //     return response()->json(['errors'=>$validator->errors()->all()]);
        // }

        // dd($request->all());
      
        // dd($request->all());
        $doc = Document::create([
            'doc_name' => $request->doc_name,
            'position' => $request->position,
            'provincia' => $request->provincia,
            'canton' => $request->canton,
            'circun' => $request->circun,
            'parroquia' => $request->parroquia,
            'zona' => $request->zona,
            'junta_no' => $request->junta_no,
            'valid_votes' => $request->valid_votes,
            'blank_votes' => $request->blank_votes,
            'null_votes' => $request->null_votes,
            'doc_start_time' => $request->doc_start_time,
            'doc_end_time' => $request->doc_end_time,
            'report_disturbance' => $request->report_disturbance,
            'comments' => $request->comments,
            'added_by' => Auth::user()->id,
            'status' => 'active',
            'election' => '2022',

        ]);

        $doc_id = $doc->id;
        foreach($files as $file)
        {
            Files::create([
                'document_id' => $doc_id,
                'file_name' => $file,
            ]);
        }

        // dd($doc_id);
        return redirect()->route('home')->with('message','Document is successfully Uploaded');
        // return view('Staff.uploadDocument');
    }




    public function editDocument($id)
    {
        $id_org = \Crypt::decrypt($id); 
        $doc = Document::find($id_org);
        $files = Files::find($id_org);
        return view('staff.editUploadDocument',compact('doc','files'));
        dd($doc);
    }


    public function getElectionCandidate(Request $request) 
    {
        $matchThese = ['provincia' => 'provin', 'canton' => 'canto','parroquia' => 'parroquia','circun' => 'circun','zona' => 'zona','junta_no' => 'junta' ];
        $results = ElectionDetails::where($matchThese)->get()->first();
        // dd($results->voters);
        $matchCandidate = ['state' => 'state', 'position' => 'position','parroquia' => 'parroquia','city' => 'city' ];
        $resultCandi = User::where($matchCandidate)->get();
       
        $all_candi = '';
        $i=0;
        foreach($resultCandi as $res)
        {
            $i++;
            $all_candi .= '<tr><td scope="row" class="row_first">'.$i.'</td><td>'.$res->name.'</td><td><input placeholder="Enter Votes" type="text" class="form-control" name="candidate_'.$i.'"  id="candidate_'.$i.'"/></td></tr>';
        }
       
    // dd($all_candi);
        return response()->json([
            'total_voters'=> $results->voters,
            'candidates_name'=>$all_candi,
            'total_candidates'=>$i

        ]);
    }
}
