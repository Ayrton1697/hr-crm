<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job_posting;
use App\Models\Applicant;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;

class jobPostingController extends Controller
{
    public function index(){
      
        $job_postings = job_posting::All();

        //return csrf_token();
        return $job_postings->toArray();
    }

    public function create_posting(Request $request){
        
        $validate = $this->validate($request,[
            'name' => 'required',
            'company_name' => 'required',
            'location' => 'required',
            'currency' => 'required',
            'status' => 'required'
        ]);
        // dd($request);
        $job_posting = new job_posting();
        $job_posting->user_id = 1;
        $job_posting->name = $request->input('name');
        $job_posting->company_name = $request->input('company_name');
        $job_posting->location = $request->input('location');
        $job_posting->hiring_modality = $request->input('hiring_modality');
        $job_posting->work_modality = $request->input('work_modality');
        $job_posting->english_level = $request->input('english_level');
        $job_posting->seniority = $request->input('seniority');
        $job_posting->requirements = json_encode($request->input('requirements'));
        $job_posting->currency = $request->input('currency');
        $job_posting->status = $request->input('status');
        $job_posting->created_at = Carbon::now();

        $job_posting->save();

       return redirect()->route('dashboard');
    }

    public function edit_posting(request $request){
    
        $id= $request->input('posting_id');
        $job_posting = job_posting::find($id);
    
        $validate = $this->validate($request,[
            'name' => 'required',
            'company_name' => 'required',
            'hiring_modality' => 'required',
            'work_modality' => 'required',
            'english_level' => 'required',
            'seniority' => 'required',
            'location' => 'required',
            'currency' => 'required',
            'status' => 'required'
        ]);
        // $requirements_processed = explode("\n" , $request->input('requirements'));

        //$requirements_processed = explode("&nbsp;", $request->input('requirements'));
        $new_req = str_replace('<p>','<br>',$request->input('requirements'));
        $requirements_processed = str_replace('&nbsp;','',explode("<br>",$new_req));
    
    
        // foreach($requirements_processed as $req){
        //     echo($req);
        // }

        //  var_dump($request->input('requirements'));
        //  var_dump($requirements_processed);
        //  var_dump(json_encode($requirements_processed));
        //  var_dump(json_encode($request->input('requirements')));
   
        //  dd();
        // dd(json_encode($request->input('requirements')));
        // dd(explode(PHP_EOL, $request->input('requirements')));

        $job_posting->name = $request->input('name');
        $job_posting->company_name = $request->input('company_name');
        $job_posting->location = $request->input('location');
        $job_posting->hiring_modality = $request->input('hiring_modality');
        $job_posting->work_modality = $request->input('work_modality');
        $job_posting->work_modality = $request->input('work_modality');
        $job_posting->english_level = $request->input('english_level');
        $job_posting->seniority = $request->input('seniority');
        $job_posting->requirements = json_encode($requirements_processed) ; //json_encode(
        $job_posting->currency = $request->input('currency');
        $job_posting->status = $request->input('status');
        $job_posting->updated_at = Carbon::now();

        $job_posting->save();

        return redirect()->route('dashboard');
    }

    public function edit_user_status(Request $request){

            $posting_id = $request->input('job_posting_id');
            $applicant_id = $request->input('user_id');
            $status = $request->input('value');

            $applicant = Applicant::find($applicant_id);
            $applicant->job_postings()->updateExistingPivot($posting_id,['status' => $status]);
        
            // $id = $request->input('applicant_posting_id');

            // $applicant->job_postings()->updateExistingPivot($job_posting->id,['status' => $request->input('status')]);


    }

    public function delete_posting(Request $request){
        $id = $request->input('posting_id');
        $job_posting = job_posting::find($id);
        $job_posting->delete();
        return redirect()->route('dashboard');
        
    }

    public function delete_applicant(Request $request){

        $job_posting_id = $request->input('job_posting_id');

        $applicant_id = Applicant::find($request->input('user_id'));

        $applicant_id->job_postings()->wherePivot('job_posting_id',$job_posting_id)->detach();

        return redirect()->route('dashboard');
        
    }

    public function posting_detail(Request $request,$id = null){
        // dd($id);
        $job_posting = job_posting::find($id);
        $applicants_filtered = Array();
        $status = '';
        $message='';
        // dd($job_posting);
        if(isset($request->status)){
            $status = $request->status;
 
            // $postings = job_posting::find($posting)->get();

            $job_posting_filtered = DB::table('applicant_job_posting')->where('job_posting_id', $id)->where('status',$status)->get();
           
            //dd($job_posting_filtered->pluck('applicant_id')->toArray());
            //HAY QUE DEVOLVER A LOS APLICANTES, NO A LA RELACION, NECESITAMOS LOS NOMBRES, CV, LINKEDIN, ETC
            $applicants_filtered = Applicant::whereIn('id',$job_posting_filtered->pluck('applicant_id')->toArray())->get(); //CUANDO EL ID DEL APLICANTE ESTA EN EL ID DE LOS QUE FILTRAMOS (job_posting_filtered),LOS DEVOLVEMOS)
            if(count($applicants_filtered) == 0){
                $message = 'Ningún candidato cumple el criterio seleccionado';
            }
        }
     
        // dd($job_posting);

        // dd(json_decode($job_posting->requirements));
        // $requirements = explode("<li>",json_decode($job_posting->requirements));
        // dd($requirements);
        return view('postingdetail',['job_posting' => $job_posting,'applicants_filtered' => $applicants_filtered, 'status' => $status,'message' => $message]);
    }

    public function posting_landing($id){

        return view('postinglanding', ['posting' => job_posting::find($id)]);
    }

    public function posting_apply(request $request){

        $id = $request->input('posting_id');
        $job_posting = job_posting::find($id);
        $applicant = Applicant::where('email', $request->input('remail'))->get();

        $file_path = $request->file('file_path');

        if(!empty($file_path)){
            $file_path = $request->file('file_path');
            $cv_path_name = time() . $file_path->getClientOriginalName();
            Storage::disk('cvs')->put($cv_path_name, File::get($file_path));
        }
      
        if($applicant->isEmpty()){
            
            $applicant = New Applicant();

            $applicant->name =$request->input('rname');
            $applicant->email = $request->input('remail');
            $applicant->phone = $request->input('rphone');
            $applicant->linkedin_url = $request->input('rlinkedin');

            if (!empty($file_path)) {
            $cv_path_name = time() . $file_path->getClientOriginalName();
            Storage::disk('cvs')->put($cv_path_name, File::get($file_path));
            $applicant->cv_path = ENV('APP_URL') . 'storage/app/cvs/'. $cv_path_name;
            }

            
            $applicant->save();

            $applicant->job_postings()->attach($job_posting);

            
        }else{
            $applicant = Applicant::where('email', $request->input('remail'))->first();

            $posting_ids_array = array();

            foreach($applicant->job_postings as $applicant_posting){
               
                array_push($posting_ids_array,$applicant_posting->pivot->job_posting_id);
            }

            if(in_array($id,$posting_ids_array)){
                //El usuario ya aplico para esta busqueda
                $applicant->job_postings()->updateExistingPivot($job_posting->id,['job_posting_id' => $id]);
            }else{
                //Primera vez que la persona aplica
                $applicant->job_postings()->attach($job_posting);
            }
            if(isset($cv_path_name)){
                $applicant->cv_path = ENV('APP_URL') . 'storage/app/cvs'.'/'. $cv_path_name;
            }
           
            $applicant->linkedin_url = $request->input('rlinkedin');
            $applicant->save();
            // dd($applicant->job_postings['job_posting_id']);
            // // dd($applicant);
            // foreach($applicant->job_postings as $posting){
            //     echo($posting);
            //     echo("<br>");
            // }
            
         
        }

        return redirect()->route('job_postings')->with(['message' => '¡Te postulaste con éxito!']);

    }

    public function posting_search(Request $request){

       $posting_name = $request->input('search');

       $postings = job_posting::where('name','like', '%'. $posting_name. '%')->get();
       
    //    dd($postings);


        return view('job_postings',['postings' => $postings]);
    }

    public function dashboard_search(Request $request){

        $company_name = $request->input('search');
 
        $postings = job_posting::where('company_name','like', '%'. $company_name. '%')->get();
        
     //    dd($postings);
 
 
         return view('dashboard',['postings' => $postings]);
     }

     public function status_search(Request $request){
        
        $status = $request->input('status');
        $posting = $request->input('job_posting_id');
 
        $postings = job_posting::find($posting)->get();
    
        
        $postings_filtered = DB::table('applicant_job_posting')->where('job_posting_id', $posting)->where('status',$status)->get();
        // dd( 'hola');
        // dd( $postings_filtered);

        return response()->json([
            'search_status' => $status,
            'postings' => $postings_filtered,
          ], 200); 

     }

     public function posting_change(Request $request){

        $from_job_posting = $request->input('from_job_posting');
        $to_job_posting = $request->input('to_job_posting');
        $user_id = $request->input('user_id');
     
        $applicant = Applicant::find($user_id);

        $applicant->job_postings()->updateExistingPivot($from_job_posting,['job_posting_id' => $to_job_posting]);

     }

 
}
