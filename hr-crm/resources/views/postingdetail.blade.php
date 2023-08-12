<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vacantes') }}
        </h2>
    </x-slot>
  

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<table class="border-collapse table-auto w-full text-sm">
                <thead>
                  <tr>
                  <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Id</th>
                  <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Position</th>
                  <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Company name</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Location</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Requirements</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Hiring Modality</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Work Modality</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">English Level</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Currency</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Seniority</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-slate-800">
                    <tr>
                    <!-- onclick="window.location='{{route('JobPosting.detail', ['id' => $JobPosting->id])}} ' " style="cursor:pointer" -->
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$JobPosting->id}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$JobPosting->name}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$JobPosting->company_name}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$JobPosting->location}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
<!--                      
                    @foreach( explode('"', preg_replace('/[][]/','',str_replace(',','',$JobPosting->requirements)))  as $req)
                            @if($req != "")
                        <li> {{strip_tags($req)}}</li>
                            @endif
                    @endforeach -->
                            
                    {!! $JobPosting->requirements !!}

                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$JobPosting->hiring_modality}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$JobPosting->work_modality}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$JobPosting->english_level}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$JobPosting->currency}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$JobPosting->seniority}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$JobPosting->status}}</td>
                </tbody>
                
</table>
</div>
</div>
<div class="py-12">

        <div class="max-w-max mx-auto sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Candidatos') }}
        </h2>
        <!-- <form method="POST" action="{{ route('JobPosting.edit_user_status') }}"> -->
        @csrf
        <script>
             window.myToken =  <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
        </script>
        @if(count($JobPosting->applicants) == 0)
        <h2>No hay candidatos para esta posición.</h2>
        @else
          @if(isset($message) and !empty($message))
          <div class="text-center flex justify-center align-center">
            <h1 class="font-medium text-lg text-slate-400 dark:text-slate-200">{{$message}}</h1>
          </div>
          @endif
            <table class="border-collapse table-auto w-full text-sm" id="applicants_table">
                <thead>
                  <tr>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Id</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Name</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Email</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">CV</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Linkedin</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Phone</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                      <select class="search_status border-none focus:outline-none focus:border-none shadow-none font-medium text-slate-400 dark:text-slate-200 text-left bg-transparent" id="status_search" name="status" placeholder="Status" >
                        <option class="select-option" selected value="" >Status</option>
                        <option class="select-option" value="Activo" >Activo</option>
                        <option class="select-option"  value="Pendiente">Pendiente</option>
                        <option class="select-option"  value="Rechazado" >Rechazado</option>
                    </select>
                      </th>
                      <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                        Mover hacia
                      </th>
                  </tr>
                </thead>
                <tbody class="bg-white dark:bg-slate-800">
               
              
                @if(isset($applicants_filtered) and count($applicants_filtered) > 0)
  
                  @if(isset($message) and !empty($message))
                    <h1>{{$message}}</h1>
                  @endif
                  @foreach($applicants_filtered as $applicant_filtered)
                  
                <input type="hidden" id='applicant_id' name='applicant_id' value="{{$applicant_filtered->id}}">
                <input type="hidden" id='JobPosting_id' name='JobPosting_id' value="{{$JobPosting->id}}">
                <input type="hidden" id='app_url' name='JobPosting_id' value="{{ENV('APP_URL')}}">
                
                  <tr>
                    <!-- onclick="window.location='{{route('JobPosting.detail', ['id' => $JobPosting->id])}} ' " style="cursor:pointer" -->
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$applicant_filtered->id}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$applicant_filtered->name}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                     <a href="mailto:{{$applicant_filtered->email}}">{{$applicant_filtered->email}}</a> 
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                    <a href="{{$applicant_filtered->cv_path}}">
                        @if($applicant_filtered->cv_path)
                        {{mb_strimwidth($applicant_filtered->cv_path, 0, 40, "...")}}
                        
                        @else 
                        No tiene
                        @endif
                    </a> 
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$applicant_filtered->linkedin_url}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$applicant_filtered->phone}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                    <select class="form-control-select status" id="{{$applicant_filtered->id}}" name="status" required >
                        <option class="select-option" value="Activo" {{$status == "Activo" ? "selected" : ""}} >Activo</option>
                        <option class="select-option"  value="Pendiente" {{$status == "Pendiente" ? "selected" : ""}}>Pendiente</option>
                        <option class="select-option"  value="Rechazado" {{$status == "Rechazado" ? "selected" : ""}}>Rechazado</option>
                    </select>
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                    <select class="posting_change search_status border-none focus:outline-none focus:border-none shadow-none font-medium text-slate-400 dark:text-slate-200 text-left bg-transparent" id="posting_change" name="posting_change" placeholder="Status" >
                        <option class="select-option" selected value="" >Mover A</option>
                        @foreach($JobPosting::All() as $JobPosting_select)
                        <option class="select-option" value="{{$JobPosting_select->id}}" id="{{$JobPosting_select->id}}">{{mb_strimwidth($JobPosting_select->name.', ' .$JobPosting_select->company_name, 0, 40, "...") }}</option>
                        @endforeach
                
                    </select>
                  </td>
                  </tr>
                  @endforeach
                @else
                @foreach($JobPosting->applicants as $applicant_posting)
                <input type="hidden" id='applicant_id' name='applicant_id' value="{{$applicant_posting->id}}">
                <input type="hidden" id='JobPosting_id' name='JobPosting_id' value="{{$JobPosting->id}}">
                <input type="hidden" id='app_url' name='JobPosting_id' value="{{ENV('APP_URL')}}">
                
                  <tr>
                    <!-- onclick="window.location='{{route('JobPosting.detail', ['id' => $JobPosting->id])}} ' " style="cursor:pointer" -->
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$applicant_posting->id}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$applicant_posting->name}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                     <a href="mailto:{{$applicant_posting->email}}">{{$applicant_posting->email}}</a> 
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                    <a href="{{$applicant_posting->cv_path}}">
                        @if($applicant_posting->cv_path)
                        {{mb_strimwidth($applicant_posting->cv_path, 0, 20, "...")}}
                        
                        @else 
                        No tiene
                        @endif
                    </a> 
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                      <a href="{{$applicant_posting->linkedin_url}}">
                       {{mb_strimwidth($applicant_posting->linkedin_url, 0, 20, "...")}}
                      </a> 
                       </td>

                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$applicant_posting->phone}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                    <select class="form-control-select status" id="{{$applicant_posting->id}}" name="status" required >
                        <option class="select-option" value="Activo" {{$applicant_posting->pivot->status == "Activo" ? "selected" : ""}} >Activo</option>
                        <option class="select-option"  value="Pendiente" {{$applicant_posting->pivot->status == "Pendiente" ? "selected" : ""}}>Pendiente</option>
                        <option class="select-option"  value="Rechazado" {{$applicant_posting->pivot->status == "Rechazado" ? "selected" : ""}}>Rechazado</option>
                    </select>
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                    <select class="search_status border-none focus:outline-none focus:border-none shadow-none font-medium text-slate-400 dark:text-slate-200 text-left bg-transparent" id="status_search" name="status" placeholder="Status" >
                        <option class="select-option text-center" selected value="" >Mover A</option>
                        @foreach($JobPosting::All() as $JobPosting_select)
                        <option class="select-option" value="Activo" >{{mb_strimwidth($JobPosting_select->name.', ' .$JobPosting_select->company_name, 0, 40, "...") }}</option>
                        @endforeach
                
                    </select>
                  </td>
                  <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400 delete-applicant" id="{{$applicant_posting->id}}" style="cursor:pointer">
                      <i class="fa-solid fa-xmark"></i>
                  </td>
                  </tr>

                  @endforeach
               @endif
            
                </tbody>
              </table>
           @endif
            
              <!-- </form> -->
        </div>
</x-app-layout>
<script src="{{asset('js/statusChange.js')}}"></script> <!-- Custom scripts -->
<script src="{{asset('js/statusSearch.js')}}"></script> <!-- Custom scripts -->
<script src="{{asset('js/postingChange.js')}}"></script> <!-- Custom scripts -->
<script src="{{asset('js/applicantDelete.js')}}"></script> <!-- Custom scripts -->