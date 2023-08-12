<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPosting;
use App\Models\Applicant;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TimePicker;
 


class jobPostingController extends Controller
{
    public function index(){
      
        $JobPostings = JobPosting::All();

        //return csrf_token();
        return $JobPostings->toArray();
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
        $JobPosting = new JobPosting();
        $JobPosting->user_id = 1;
        $JobPosting->name = $request->input('name');
        $JobPosting->company_name = $request->input('company_name');
        $JobPosting->location = $request->input('location');
        $JobPosting->hiring_modality = $request->input('hiring_modality');
        $JobPosting->work_modality = $request->input('work_modality');
        $JobPosting->english_level = $request->input('english_level');
        $JobPosting->seniority = $request->input('seniority');
        $JobPosting->requirements = json_encode($request->input('requirements'));
        $JobPosting->currency = $request->input('currency');
        $JobPosting->status = $request->input('status');
        $JobPosting->created_at = Carbon::now();

        $JobPosting->save();

       return redirect()->route('dashboard');
    }

    public function edit_posting(request $request){
    
        $id= $request->input('posting_id');
        $JobPosting = JobPosting::find($id);
    
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

        $JobPosting->name = $request->input('name');
        $JobPosting->company_name = $request->input('company_name');
        $JobPosting->location = $request->input('location');
        $JobPosting->hiring_modality = $request->input('hiring_modality');
        $JobPosting->work_modality = $request->input('work_modality');
        $JobPosting->work_modality = $request->input('work_modality');
        $JobPosting->english_level = $request->input('english_level');
        $JobPosting->seniority = $request->input('seniority');
        $JobPosting->requirements = json_encode($requirements_processed) ; //json_encode(
        $JobPosting->currency = $request->input('currency');
        $JobPosting->status = $request->input('status');
        $JobPosting->updated_at = Carbon::now();

        $JobPosting->save();

        return redirect()->route('dashboard');
    }

    public function edit_user_status(Request $request){

            $posting_id = $request->input('JobPosting_id');
            $applicant_id = $request->input('user_id');
            $status = $request->input('value');

            $applicant = Applicant::find($applicant_id);
            $applicant->JobPostings()->updateExistingPivot($posting_id,['status' => $status]);
        
            // $id = $request->input('applicant_posting_id');

            // $applicant->JobPostings()->updateExistingPivot($JobPosting->id,['status' => $request->input('status')]);


    }

    public function delete_posting(Request $request){
        $id = $request->input('posting_id');
        $JobPosting = JobPosting::find($id);
        $JobPosting->delete();
        return redirect()->route('dashboard');
        
    }

    public function delete_applicant(Request $request){

        $JobPosting_id = $request->input('JobPosting_id');

        $applicant_id = Applicant::find($request->input('user_id'));

        $applicant_id->JobPostings()->wherePivot('JobPosting_id',$JobPosting_id)->detach();

        return redirect()->route('dashboard');
        
    }

    public function posting_detail(Request $request,$id = null){
        // dd($id);
        $JobPosting = JobPosting::find($id);
        $applicants_filtered = Array();
        $status = '';
        $message='';
        // dd($JobPosting);
        if(isset($request->status)){
            $status = $request->status;
 
            // $postings = JobPosting::find($posting)->get();

            $JobPosting_filtered = DB::table('applicant_JobPosting')->where('JobPosting_id', $id)->where('status',$status)->get();
           
            //dd($JobPosting_filtered->pluck('applicant_id')->toArray());
            //HAY QUE DEVOLVER A LOS APLICANTES, NO A LA RELACION, NECESITAMOS LOS NOMBRES, CV, LINKEDIN, ETC
            $applicants_filtered = Applicant::whereIn('id',$JobPosting_filtered->pluck('applicant_id')->toArray())->get(); //CUANDO EL ID DEL APLICANTE ESTA EN EL ID DE LOS QUE FILTRAMOS (JobPosting_filtered),LOS DEVOLVEMOS)
            if(count($applicants_filtered) == 0){
                $message = 'Ningún candidato cumple el criterio seleccionado';
            }
        }
     
        // dd($JobPosting);

        // dd(json_decode($JobPosting->requirements));
        // $requirements = explode("<li>",json_decode($JobPosting->requirements));
        // dd($requirements);
        return view('postingdetail',['JobPosting' => $JobPosting,'applicants_filtered' => $applicants_filtered, 'status' => $status,'message' => $message]);
    }

    public function posting_landing($id){

        return view('postinglanding', ['posting' => JobPosting::find($id)]);
    }

    public function posting_apply(request $request){

        $id = $request->input('posting_id');
        $JobPosting = JobPosting::find($id);
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

            $applicant->JobPostings()->attach($JobPosting);

            
        }else{
            $applicant = Applicant::where('email', $request->input('remail'))->first();

            $posting_ids_array = array();

            foreach($applicant->JobPostings as $applicant_posting){
               
                array_push($posting_ids_array,$applicant_posting->pivot->JobPosting_id);
            }

            if(in_array($id,$posting_ids_array)){
                //El usuario ya aplico para esta busqueda
                $applicant->JobPostings()->updateExistingPivot($JobPosting->id,['JobPosting_id' => $id]);
            }else{
                //Primera vez que la persona aplica
                $applicant->JobPostings()->attach($JobPosting);
            }
            if(isset($cv_path_name)){
                $applicant->cv_path = ENV('APP_URL') . 'storage/app/cvs'.'/'. $cv_path_name;
            }
           
            $applicant->linkedin_url = $request->input('rlinkedin');
            $applicant->save();
            // dd($applicant->JobPostings['JobPosting_id']);
            // // dd($applicant);
            // foreach($applicant->JobPostings as $posting){
            //     echo($posting);
            //     echo("<br>");
            // }
            
         
        }

        return redirect()->route('JobPostings')->with(['message' => '¡Te postulaste con éxito!']);

    }

    public function posting_search(Request $request){

       $posting_name = $request->input('search');

       $postings = JobPosting::where('name','like', '%'. $posting_name. '%')->get();
       
    //    dd($postings);


        return view('JobPostings',['postings' => $postings]);
    }

    public function dashboard_search(Request $request){

        $company_name = $request->input('search');
 
        $postings = JobPosting::where('company_name','like', '%'. $company_name. '%')->get();
        
     //    dd($postings);
 
 
         return view('dashboard',['postings' => $postings]);
     }

     public function status_search(Request $request){
        
        $status = $request->input('status');
        $posting = $request->input('JobPosting_id');
 
        $postings = JobPosting::find($posting)->get();
    
        
        $postings_filtered = DB::table('applicant_JobPosting')->where('JobPosting_id', $posting)->where('status',$status)->get();
        // dd( 'hola');
        // dd( $postings_filtered);

        return response()->json([
            'search_status' => $status,
            'postings' => $postings_filtered,
          ], 200); 

     }

     public function posting_change(Request $request){

        $from_JobPosting = $request->input('from_JobPosting');
        $to_JobPosting = $request->input('to_JobPosting');
        $user_id = $request->input('user_id');
     
        $applicant = Applicant::find($user_id);

        $applicant->JobPostings()->updateExistingPivot($from_JobPosting,['JobPosting_id' => $to_JobPosting]);

     }

     public function getAppointments(){
        // $model = new Month();
        // $model->boot();
        // dd($model);
        DateTimePicker::make('published_at');
        DatePicker::make('date_of_birth');
        TimePicker::make('alarm_at');
        return view('appointment');
     }

 
}
