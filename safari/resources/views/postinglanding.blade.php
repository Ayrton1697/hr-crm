@extends('layouts/layout')

@section('content')
<div class="pb-12 h-screen flex justify-center items-center ">
    <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center items-center "> 
         
        <div class="text-center p-10 w-full m-10">
    @if($posting)  
           
                    <h1 class="text-7xl text-gray-700"> {{$posting->name}} </h1>
                    <h3 class="text-sm text-gray-400 ">{{$posting->id}} </h3>
                    <p class="text-base text-gray-400 mt-4">{{$posting->description}}</p>
                    <p class="text-base text-gray-400 mt-4">{{$posting->location}}</p>
                    <p class="text-base text-gray-400 mt-4">{{$posting->currency}}</p>
                    <p class="text-base text-gray-400 mt-4">{{$posting->company_name}}</p>
                    <button  href="#details-lightbox-{{$posting->id}}" style="cursor:pointer" class="transition-all hover:bg-indigo-800 popup-with-move-anim border-none outline-none focus:outline-none  bg-indigo-600 px-8 py-2 mt-8 rounded-3xl text-white font-light uppercase tracking-wide">
                        Aplicar
                    </button>

      <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->
    <div id="details-lightbox-{{$posting->id}}" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-6">
                    <h1>{{$posting->name}}</h1>
                    <h3>{{$posting->description}}</h3>
                    <hr>
                    <h2>Requirements</h2>
                    <ul class="list-unstyled li-space-lg">
                      
                        @foreach( explode('"', preg_replace('/[][]/','',str_replace(',','',$posting->requirements)))  as $req)
                            @if($req != "")
                            <li class="media">
                                 <i class="fas fa-check"></i> <div class="media-body">{{strip_tags($req)}}</div>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                  
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <h1>{{$posting->company_name}} &nbsp;, &nbsp; {{$posting->location }}.</h1>
                    <br>
                    <hr>
                    <ul class="list-unstyled li-space-lg">
                       <li class="media">
                        <i class="fas fa-check"></i> <div class="media-body">Currency: <span class="listing_highlight">{{$posting->currency}}</span></div>
                      </li>
                      <li class="media">
                        <i class="fas fa-check"></i> <div class="media-body">Work Modality: <span class="listing_highlight">{{$posting->work_modality}}</span></div>
                      </li>
                      <li class="media">
                        <i class="fas fa-check"></i> <div class="media-body">Hiring Modality: <span class="listing_highlight" >{{$posting->hiring_modality}}</span></div>
                      </li>
                      <li class="media">
                        <i class="fas fa-check"></i> <div class="media-body">English level: <span class="listing_highlight">{{$posting->english_level}}</span></div>
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
                    <button class="form-control-button transition-all bg-primary-safari hover:bg-fuchsia-800 border-none outline-none focus:outline-none px-8 py-2 mt-8 rounded-3xl text-white font-light uppercase tracking-wide" onclick="document.getElementById('file_path').click()">CARGAR CV</button>
                    <input type='file' id="file_path" name="file_path" style="display:none" class="form-control-file" required> 
                    <!-- <label for="file_path" class="label-control">Curriculum Vitae</label> -->
                </div>

                <div class="form-group">
                    <button type="submit" class="form-control-submit-button transition-all bg-primary-safari hover:bg-fuchsia-800 border-none outline-none focus:outline-none px-8 py-2 mt-8 rounded-3xl text-white font-light uppercase tracking-wide">
                        APLICAR
                    </button>
                </div>
                <div class="form-message">
                    <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                </div>
                <input type="hidden" id="{{$posting->id}}" name="posting_id" value="{{$posting->id}}">
            </form>
        </div> <!-- end of form-container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->

    @else 
                    <h1 class="text-xl text-gray-700">There are no openings matching your request</h1>

    @endif
        </div>   
    </div>
</div>
  
@endsection