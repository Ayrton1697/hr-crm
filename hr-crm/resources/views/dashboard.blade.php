<x-app-layout>
    <x-slot name="header">
        <h2 class="font-light text-xl leading-tight">
            {{ __('Vacantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <form action="{{route('JobPostings.dashboard_search')}}" method="POST">
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
                    @foreach ($postings as $JobPosting)
                    <div class="bg-indigo-50 mb-4">
                        <span class="bg-indigo-50">{{$JobPosting->id}}</span>
                        <span>{{$JobPosting->name}}</span>
                        <span>{{$JobPosting->company_name}}</span>
           
                        <span>{{$JobPosting->currency}}</span>
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
                    @foreach ($postings->sortBy('status') as $JobPosting)
                  <tr>
                    <!-- onclick="window.location='{{route('JobPosting.detail', ['id' => $JobPosting->id])}} ' " style="cursor:pointer" -->
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$JobPosting->id}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$JobPosting->name}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$JobPosting->company_name}}</td>
           
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$JobPosting->currency}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$JobPosting->location}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                        
        
<!-- 
                        @foreach( explode('"', preg_replace('/[][]/','',str_replace(',','',$JobPosting->requirements)))  as $req)
                            @if($req != "")
                        <li> {{strip_tags($req)}}</li>
                            @endif
                        @endforeach -->
                      
                 
                        {!! $JobPosting->requirements !!}
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                        <span
                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                        <span aria-hidden
                            class="absolute inset-0 opacity-50 rounded-full {{$JobPosting->status == 'Activa' ? 'bg-green-200' : 'bg-red-200'}}"></span>
                        <span class="relative">{{$JobPosting->status}}</span>
                    </span> 
                    </td>
                    <!-- <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$JobPosting->created_at}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$JobPosting->updated_at}}</td> -->
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                        <button>
                           <a href="#details-lightbox-{{$JobPosting->id}}" style="cursor:pointer"  class="popup-with-move-anim">
                            <i class="fa-solid fa-pencil"></i>
                            </a> 
                        </button>
                       
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                        <button>
                            <a href="{{route('JobPosting.detail', ['id' => $JobPosting->id])}}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                    </button>
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                        <button>
                            <!-- <a href="{{route('JobPosting.delete', ['id' => $JobPosting->id])}}">  -->
                            <a href="#delete-lightbox-{{$JobPosting->id}}" style="cursor:pointer"  class="popup-with-move-anim"> 
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
    @foreach ($postings->sortBy('status') as $JobPosting)
	<div id="details-lightbox-{{$JobPosting->id}}" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="form-container">
            <form id="requestForm" data-toggle="validator" data-focus="false" action="{{route('JobPosting.edit')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control-input" id="name" name="name" required placeholder="{{$JobPosting->name}}" value="{{$JobPosting->name}}">
                    <label class="label-control" for="name" ></label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-input" id="company_name" name="company_name" required placeholder="{{$JobPosting->company_name}}" value="{{$JobPosting->company_name}}">
                    <label class="label-control" for="company_name"></label>
                    <div class="help-block with-errors"></div>
                </div>
        
                <div class="form-group">
                    <input type="text" class="form-control-input" id="currency" name="currency" required placeholder="{{$JobPosting->currency}}" value="{{$JobPosting->currency}}"> 
                    <label class="label-control" for="currency"></label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-input" id="location" name="location" required placeholder="{{$JobPosting->location}}" value="{{$JobPosting->location}}">
                    <label class="label-control" for="location"></label>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <textarea id="editor--{{$JobPosting->id}}" name="requirements">
                    
                        @foreach( explode('"', preg_replace('/[][]/','',str_replace(',','',$JobPosting->requirements)))  as $req)
                            @if($req != "")
                           {{strip_tags($req)}}</br>
                            @endif
                        @endforeach
                    
                    </textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-input" id="hiring_modality" name="hiring_modality" required placeholder="{{'Modalidad de contratación: ' . $JobPosting->hiring_modality}}" value="{{$JobPosting->hiring_modality}}">
                    <label class="label-control" for="hiring_modality"></label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-input" id="work_modality" name="work_modality" required placeholder="{{'Modalidad de trabajo: ' . $JobPosting->work_modality}}" value="{{$JobPosting->work_modality}}">
                    <label class="label-control" for="work_modality"></label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-input" id="english_level" name="english_level" required placeholder="{{'Nivel de inglés: ' . $JobPosting->english_level}}" value="{{$JobPosting->english_level}}">
                    <label class="label-control" for="english_level"></label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-input" id="seniority" name="seniority" required placeholder="{{'Seniority: ' . $JobPosting->seniority}}" value="{{$JobPosting->seniority}}">
                    <label class="label-control" for="seniority"></label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <select class="form-control-select" id="status" name="status" required>
                        <option class="select-option" value="" disabled selected>Status</option>
                        <option class="select-option" value="Activa" {{$JobPosting->status == "Activa" ? "selected" : ""}} >Activa</option>
                        <option class="select-option"  value="No activa" {{$JobPosting->status == "No activa" ? "selected" : ""}}>No activa</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control-submit-button">Guardar</button>
                </div>
                <div class="form-message">
                    <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                </div>
                <input type="hidden" id="{{$JobPosting->id}}" name="posting_id" value="{{$JobPosting->id}}">
            </form>
        </div> <!-- end of form-container -->
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-6">
                    <h3>{{$JobPosting->name}}</h3>
                    <hr>
                    <h5>Core feature</h5>
                    <p>{{$JobPosting->company_name}}.</p>
                    <ul class="list-unstyled li-space-lg">
                      
                        <!-- @foreach( explode('"', preg_replace('/[][]/','',str_replace(',','',$JobPosting->requirements)))  as $req)
                            @if($req != "")
                            <li class="media">
                                 <i class="fas fa-check"></i> <div class="media-body">{{strip_tags($req)}}</div>
                            </li>
                            @endif
                        @endforeach -->
                 
       
             
                    </ul>
                  
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <hr>
                    <h5>{{$JobPosting->location}}.</h5>
                 
                      
             
                        <ul class="list-unstyled li-space-lg">
                       
                           <li class="media">
                            <i class="fas fa-check"></i> <div class="media-body">{{$JobPosting->currency}}</div>
                          </li>
         
                        </ul>
             
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->

    <div id="delete-lightbox-{{$JobPosting->id}}" class="lightbox-basic zoom-anim-dialog mfp-hide" style="width: 25rem;">
        <div class="form-container">
            <form id="requestForm" data-toggle="validator" data-focus="false" action="{{route('JobPosting.delete')}}" method="POST">
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
                        <input type="hidden" id="{{$JobPosting->id}}" name="posting_id" value="{{$JobPosting->id}}">
               
            </form>
        </div> <!-- end of form-container -->
    
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->
    <script>
    ClassicEditor
    .create( document.querySelector( '#editor--{{$JobPosting->id}}' ),{
     
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
