<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans text-xl font-medium text-gray-600">
            {{ __('Nueva Vacante') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      
            <div id="details-lightbox" class="lightbox-basic zoom-anim-dialog ">
                
                <div class="form-container">
                    <form id="requestForm" data-toggle="validator" data-focus="false" action="{{route('JobPosting.create')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control-input border-slate-300" id="name" name="name" required placeholder="Puesto">
                            <label class="label-control" for="name" ></label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input border-slate-300" id="company_name" name="company_name" required placeholder="Empresa" >
                            <label class="label-control" for="company_name"></label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input border-slate-300" id="hiring_modality" name="hiring_modality" required placeholder="Modalidad de contratación">
                            <label class="label-control" for="hiring_modality"></label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input border-slate-300" id="work_modality" name="work_modality" required placeholder="Modalidad de trabajo">
                            <label class="label-control" for="work_modality"></label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input border-slate-300" id="english_level" name="english_level" required placeholder="Nivel de inglés" >
                            <label class="label-control" for="english_level"></label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input border-slate-300" id="currency" name="currency" required placeholder="Moneda"> 
                            <label class="label-control" for="currency"></label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input border-slate-300" id="location" name="location" required placeholder="Locacion">
                            <label class="label-control" for="location"></label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input border-slate-300" id="seniority" name="seniority" required placeholder="Seniority">
                            <label class="label-control" for="seniority"></label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="ckeditor form-control border-slate-300" name="wysiwyg-editor requirements" id="requirements" placeholder="Requerimientos"></textarea>
                        </div>
                        <div class="form-group">
                            <select class="form-control-select" id="status" name="status" required>
                                <option class="select-option" value="" disabled selected>Estado</option>
                                <option class="select-option" value="Activa">Active</option>
                                <option class="select-option"  value="No activa">Inactive</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Guardar</button>
                        </div>
                        <div class="form-message">
                            <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                </div> 
            </div> 
         
        </div>
  
    </div>

</x-app-layout>
