@extends('layouts/layout')

@section('content')
<!-- <header class="header">
    <div class="header-content">
        <div class="container">
           @foreach ($postings as $job_posting)
           <span>{{$job_posting}}</span>
           @endforeach
        </div>

    </div>

</header> -->
<div class="cards-1">
    @if(session('message'))
    <div class="alert alert-success" style="position: relative;z-index: 10000;">
        {{session('message')}}
    </div>
    @endif


<div class="container">
    <div class="container" style="margin: 7rem 0 7rem 0;">
         @if( Session::get('lang') == 'es')
        <h1 class="text-4xl">VACANTES ABIERTAS</h1>
        @else
        <h1 class="text-4xl">ACTIVE OPENINGS</h1>
        @endif

    </div>

<div class="pb-12">
    <form action="{{route('job_postings.search')}}" method="POST">
        @csrf
    <div class="flex items-center max-w-md mx-auto  border border-indigo-600 bg-white rounded-lg ">
    
            <div class="w-full">
                <input type="search" name="search" class="w-full px-4 py-1 text-gray-800 rounded-full focus:outline-none border-none focus:border-none active:border-none active:outline-none shadow-none"
                    placeholder="@if( Session::get('lang') == 'es') Buscar
                    @else Search
                    @endif" x-model="Search">
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
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8"> 
            <!-- max-w-7xl -->
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
            <!-- component -->
        <div class="flex flex-wrap items-center justify-center">
            @if(count($postings) > 0)
                @foreach ($postings->sortBy('status') as $job_posting)
                <div class="bg-white font-semibold text-center rounded-3xl border shadow hover:shadow-xl p-10 w-full md:w-1/4 m-10 h-80 ">
                    <!-- <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="product designer"> -->
                    <h1 class="text-lg text-gray-700"> {{$job_posting->name}} </h1>
                    <!-- <h3 class="text-sm text-gray-400 ">{{$job_posting->id}} </h3> -->
                    <h3 class="text-sm text-gray-400 ">{{$job_posting->currency}} </h3>

                    <h3 class="text-sm text-gray-400 ">{{$job_posting->work_modality}} </h3>

                    <h3 class="text-sm text-gray-400 ">{{$job_posting->location}} </h3>
            
                    <button  href="#details-lightbox-{{$job_posting->id}}" style="cursor:pointer" class="transition-all bg-primary-safari hover:bg-fuchsia-800 popup-with-move-anim border-none outline-none focus:outline-none  px-8 py-2 mt-8 rounded-3xl text-white font-light uppercase tracking-wide">
                    @if( Session::get('lang') == 'es')  
                        Ver
                    @else
                        Open
                    @endif
                    </button>
                </div>
                @endforeach
            @else
            <div class="bg-white font-semibold text-center p-10 w-full md:w-1/4 m-10 h-80 ">
                <!-- <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="product designer"> -->
                <h1 class="text-lg text-gray-700">
                @if( Session::get('lang') == 'es')
                    Lo sentimos!
                @else
                    Sorry!
                @endif </h1>
                <h2 class="text-lg text-gray-700"> 
                @if( Session::get('lang') == 'es')
                   No tenemos vacantes que cumplen ese criterio en este momento.
                @else
                    We don´t have openings matching your criteria at the moment.
                @endif
                  
                </h2>
           
            </div>
            @endif
        </div>
            <!-- <table class="border-collapse table-auto w-full text-sm">
                <thead>
                  <tr>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-center">Id</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-center">Name</th>
                
                    <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-center">Currency</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-center">Location</th>
                  </tr>
                </thead>
                <tbody class="bg-white dark:bg-slate-800">
                    @foreach ($postings->sortBy('status') as $job_posting)
                    <tr  href="#details-lightbox-{{$job_posting->id}}" style="cursor:pointer" class="popup-with-move-anim">
                    <td  class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$job_posting->id}}</td>
                    <td  class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$job_posting->name}}</td>
             
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$job_posting->currency}}</td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$job_posting->location}}</td>
                    </tr>
              
                  @endforeach
                </tbody>
              </table> -->
        </div>
  
    </div>
</div>

    <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->
    @foreach ($postings->sortBy('status') as $job_posting)
	<div id="details-lightbox-{{$job_posting->id}}" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-6">
                    <h1>{{$job_posting->name}}</h1>
                  
                    <hr>
                    <h2>
                        @if( Session::get('lang') == 'es')
                            Requerimientos:
                        @else
                            Requirements:
                        @endif
                    </h2>
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
                    <h1>{{$job_posting->location }}.</h1>
                    <br>
                    <hr>
                    <ul class="list-unstyled li-space-lg">
                       <li class="media">
                        <i class="fas fa-check"></i> <div class="media-body">
                        @if( Session::get('lang') == 'es')
                            Moneda:
                        @else
                            Currency:
                        @endif
                            <span class="listing_highlight">{{$job_posting->currency}}</span></div>
                      </li>
                      <li class="media">
                        <i class="fas fa-check"></i> <div class="media-body">
                        @if( Session::get('lang') == 'es')
                            Modalidad:
                        @else
                            Work modality:
                        @endif
                            <span class="listing_highlight">{{$job_posting->work_modality}}</span></div>
                      </li>
                      <li class="media">
                        <i class="fas fa-check"></i> <div class="media-body">
                        @if( Session::get('lang') == 'es')
                            Modalidad de contratación:
                        @else
                            Hiring modality:
                        @endif
                            <span class="listing_highlight" >{{$job_posting->hiring_modality}}</span></div>
                      </li>
                      <li class="media">
                        <i class="fas fa-check"></i> <div class="media-body">
                        @if( Session::get('lang') == 'es')
                            Nivel de inglés:
                        @else
                            English level:
                        @endif
                            <span class="listing_highlight">{{$job_posting->english_level}}</span></div>
                      </li>
     
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <div class="form-container mt-3">
            <form id="requestForm" data-toggle="validator" data-focus="false" action="{{route('job_posting.apply')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control-input" id="rname" name="rname" required>
                    <label class="label-control" for="rname">Full name</label>
                    <div class="help-block with-errors text-red"></div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control-input" id="remail" name="remail" required>
                    <label class="label-control" for="remail">Email</label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-input" id="rlinkedin" name="rlinkedin" required>
                    <label class="label-control" for="rlinkedin">Perfil linkedin</label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-input" id="rphone" name="rphone" required>
                    <label class="label-control" for="rphone">Phone</label>
                    <div class="help-block with-errors"></div>
                </div>
                <!-- <div class="form-group">
                    <select class="form-control-select" id="rselect" required>
                        <option class="select-option" value="" disabled selected>Interested in...</option>
                        <option class="select-option" value="Personal Loan">Starter</option>
                        <option class="select-option" value="Car Loan">Medium</option>
                        <option class="select-option" value="House Loan">Complete</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div> -->
                <!-- <div class="form-group checkbox">
                    <input type="checkbox" id="rterms" value="Agreed-to-Terms" name="rterms" required>I agree with Evolo's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms & Conditions</a>
                    <div class="help-block with-errors"></div>
                </div> -->
                <div class="form-group">
                    <!-- <input id="file_path" type="file" name="file_path" class="form-control-file" required/> -->
                    @if($errors->has('file_path'))
                    <span class="invalid-feedback help-block with-errors" role='alert'>
                        <strong>{{$errors->first('file_path')}}</strong>
                    </span>
                    @endif
                    <a class="form-control-button transition-all bg-primary-safari hover:bg-fuchsia-800 border-none outline-none focus:outline-none px-8 py-2 mt-8 rounded-3xl text-white font-light uppercase tracking-wide" style="cursor:pointer" onclick="document.getElementById('file_path').click()">
                    @if( Session::get('lang') == 'es')
                        Cargar CV
                    @else
                        Upload CV
                    @endif
                    </a>
                    <input type='file' id="file_path" name="file_path" style="display:none" class="form-control-file"> 
                    <!-- <label for="file_path" class="label-control">Curriculum Vitae</label> -->
                </div>

                <div class="form-group">
                    <button type="submit" class="form-control-submit-button transition-all bg-primary-safari hover:bg-fuchsia-800 border-none outline-none focus:outline-none px-8 py-2 mt-8 rounded-3xl text-white font-light uppercase tracking-wide">
                     @if( Session::get('lang') == 'es')
                        Aplicar!
                    @else
                        Apply!
                    @endif
                    </button>
                </div>
                <div class="form-message">
                    <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                </div>
                <input type="hidden" id="{{$job_posting->id}}" name="posting_id" value="{{$job_posting->id}}">
            </form>
        </div> <!-- end of form-container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->
    @endforeach

</div>
@endsection
