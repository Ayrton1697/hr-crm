<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vacantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <form action="{{route('job_postings.dashboard_search')}}" method="POST">
            @csrf
        <div class="flex items-center max-w-md mx-auto  border border-indigo-600 bg-white rounded-lg ">
        
                <div class="w-full">
                    <input type="search" name="search" class="w-full px-4 py-1 text-gray-800 rounded-full focus:outline-none border-none focus:border-none active:border-none active:outline-none shadow-none"
                        placeholder="Search" x-model="Search">
                </div>
                <div>
                    <button type="submit" class="flex items-center bg-primary-safari justify-center w-12 h-12 text-white rounded-r-lg"
                        :class="(search.length > 0) ? 'bg-purple-500' : 'bg-gray-500 cursor-not-allowed'"
                        :disabled="search.length == 0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
        
        </div>
    </form>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($postings as $job_posting)
                    <div class="bg-indigo-50 mb-4">
                        <span class="bg-indigo-50">{{$job_posting->id}}</span>
                        <span>{{$job_posting->name}}</span>
                        <span>{{$job_posting->company_name}}</span>
           
                        <span>{{$job_posting->currency}}</span>
                        <button>X</button> <br>
                    </div>
                    @endforeach
                </div>
            </div> -->
            <table class="border-collapse table-auto w-full text-sm">
                <thead>
                  <tr>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Id</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Position</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Company</th>
      
                    <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Currency</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Location</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Requirements</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Status</th>
                    <!-- <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Created at</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Updated at</th> -->
                  </tr>
                </thead>
                <tbody class="bg-white dark:bg-slate-800">
                    @foreach ($postings->sortBy('status') as $job_posting)
                  <tr>
                    <!-- onclick="window.location='{{route('job_posting.detail', ['id' => $job_posting->id])}} ' " style="cursor:pointer" -->
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$job_posting->id}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$job_posting->name}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$job_posting->company_name}}</td>
           
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$job_posting->currency}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$job_posting->location}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                        
        

                        @foreach( explode('"', preg_replace('/[][]/','',str_replace(',','',$job_posting->requirements)))  as $req)
                            @if($req != "")
                        <li> {{strip_tags($req)}}</li>
                            @endif
                        @endforeach
                      
                 
                      
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                        <span
                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                        <span aria-hidden
                            class="absolute inset-0 opacity-50 rounded-full {{$job_posting->status == 'Activa' ? 'bg-green-200' : 'bg-red-200'}}"></span>
                        <span class="relative">{{$job_posting->status}}</span>
                    </span> 
                    </td>
                    <!-- <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$job_posting->created_at}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$job_posting->updated_at}}</td> -->
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                        <button>
                           <a href="#details-lightbox-{{$job_posting->id}}" style="cursor:pointer"  class="popup-with-move-anim">
                            <i class="fa-solid fa-pencil"></i>
                            </a> 
                        </button>
                       
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                        <button>
                            <a href="{{route('job_posting.detail', ['id' => $job_posting->id])}}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                    </button>
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                        <button>
                            <!-- <a href="{{route('job_posting.delete', ['id' => $job_posting->id])}}">  -->
                            <a href="#delete-lightbox-{{$job_posting->id}}" style="cursor:pointer"  class="popup-with-move-anim"> 
                                @csrf
                                <i class="fa-solid fa-xmark"></i>
                            </a>
                        </button>
                    </td>
                   
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
  
    </div>

        <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->
    @foreach ($postings->sortBy('status') as $job_posting)
	<div id="details-lightbox-{{$job_posting->id}}" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="form-container">
            <form id="requestForm" data-toggle="validator" data-focus="false" action="{{route('job_posting.edit')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control-input" id="name" name="name" required placeholder="{{$job_posting->name}}" value="{{$job_posting->name}}">
                    <label class="label-control" for="name" ></label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-input" id="company_name" name="company_name" required placeholder="{{$job_posting->company_name}}" value="{{$job_posting->company_name}}">
                    <label class="label-control" for="company_name"></label>
                    <div class="help-block with-errors"></div>
                </div>
        
                <div class="form-group">
                    <input type="text" class="form-control-input" id="currency" name="currency" required placeholder="{{$job_posting->currency}}" value="{{$job_posting->currency}}"> 
                    <label class="label-control" for="currency"></label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-input" id="location" name="location" required placeholder="{{$job_posting->location}}" value="{{$job_posting->location}}">
                    <label class="label-control" for="location"></label>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <textarea id="editor--{{$job_posting->id}}" name="requirements">
                    
                        @foreach( explode('"', preg_replace('/[][]/','',str_replace(',','',$job_posting->requirements)))  as $req)
                            @if($req != "")
                           {{strip_tags($req)}}</br>
                            @endif
                        @endforeach
                    
                    </textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-input" id="hiring_modality" name="hiring_modality" required placeholder="{{'Modalidad de contratación: ' . $job_posting->hiring_modality}}" value="{{$job_posting->hiring_modality}}">
                    <label class="label-control" for="hiring_modality"></label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-input" id="work_modality" name="work_modality" required placeholder="{{'Modalidad de trabajo: ' . $job_posting->work_modality}}" value="{{$job_posting->work_modality}}">
                    <label class="label-control" for="work_modality"></label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-input" id="english_level" name="english_level" required placeholder="{{'Nivel de inglés: ' . $job_posting->english_level}}" value="{{$job_posting->english_level}}">
                    <label class="label-control" for="english_level"></label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-input" id="seniority" name="seniority" required placeholder="{{'Seniority: ' . $job_posting->seniority}}" value="{{$job_posting->seniority}}">
                    <label class="label-control" for="seniority"></label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <select class="form-control-select" id="status" name="status" required>
                        <option class="select-option" value="" disabled selected>Status</option>
                        <option class="select-option" value="Activa" {{$job_posting->status == "Activa" ? "selected" : ""}} >Activa</option>
                        <option class="select-option"  value="No activa" {{$job_posting->status == "No activa" ? "selected" : ""}}>No activa</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control-submit-button">Guardar</button>
                </div>
                <div class="form-message">
                    <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                </div>
                <input type="hidden" id="{{$job_posting->id}}" name="posting_id" value="{{$job_posting->id}}">
            </form>
        </div> <!-- end of form-container -->
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-6">
                    <h3>{{$job_posting->name}}</h3>
                    <hr>
                    <h5>Core feature</h5>
                    <p>{{$job_posting->company_name}}.</p>
                    <ul class="list-unstyled li-space-lg">
                      
                        @foreach( explode('"', preg_replace('/[][]/','',str_replace(',','',$job_posting->requirements)))  as $req)
                            @if($req != "")
                            <li class="media">
                                 <i class="fas fa-check"></i> <div class="media-body">{{strip_tags($req)}}</div>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                  
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <hr>
                    <h5>{{$job_posting->location}}.</h5>
                 
                      
             
                        <ul class="list-unstyled li-space-lg">
                       
                           <li class="media">
                            <i class="fas fa-check"></i> <div class="media-body">{{$job_posting->currency}}</div>
                          </li>
         
                        </ul>
             
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->

    <div id="delete-lightbox-{{$job_posting->id}}" class="lightbox-basic zoom-anim-dialog mfp-hide" style="width: 25rem;">
        <div class="form-container">
            <form id="requestForm" data-toggle="validator" data-focus="false" action="{{route('job_posting.delete')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group text-center">
                            <button type="submit" class="btn-outline-reg as-button">Delete</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group text-center">
                            <a class="btn-outline-reg mfp-close as-button" href="#">Back</a>
                        </div>
                    </div>
                        <div class="form-message">
                            <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                </div>
                        <input type="hidden" id="{{$job_posting->id}}" name="posting_id" value="{{$job_posting->id}}">
               
            </form>
        </div> <!-- end of form-container -->
    
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->
    <script>
    ClassicEditor
    .create( document.querySelector( '#editor--{{$job_posting->id}}' ),{
     
    } )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
    // preserve newlines in source
   




</script>
    @endforeach
 
</x-app-layout>
