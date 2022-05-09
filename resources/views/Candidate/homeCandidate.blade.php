@extends('layouts.main')

@section('content')

<!-- Main Content Here -->
<div class="main_content">
        <div class="breadCrumbs">
        <p class="breadCrumbs_heading">Home</p>
        </div>
        <div class="form_div_home">
          <h3>Select the Details</h3>

            <div class="form_div w-100">
              <form class="form" id="adminForm" method="POST" action="{{ route('dataListing')}}">
                @csrf
                <div class="form-row">
                  <div class="form-group col-12">
                    <label for="inputState" class="font-weight-bold">Position</label>
                    <select id="position" name ="position" class="form-control">
                      <option selected disabled>Choose...</option>
                      <option value="position">Position</option>
                     
                    </select>
                  </div>
                  @error('position')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-row">
                  <div class="form-group col-6">
                    <label for="provincia" class="font-weight-bold">Provincia</label>
                    <select id="provincia" name ="provincia" class="form-control">
                      <option disabled selected>Choose...</option>
                      <option value="provincia">Provincia</option>
                    </select>

                    @error('provincia')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  </div>
                  <div class="form-group col-6">
                    <label for="canton" class="font-weight-bold">Canton</label>
                    <select id="canton" name ="canton" class="form-control">
                      <option selected disabled>Choose...</option>
                      <option value="canton">Canton</option>
                    </select>
                    @error('canton')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-6">
                    <label for="parroquia" class="font-weight-bold">Parroquias</label>
                    <select id="parroquia" name ="parroquia" class="form-control">
                      <option selected disabled>Choose...</option>
                      <option value="parroquia">Parroquia</option>
                    </select>
                    @error('parroquia')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  </div>
                  <div class="form-group col-6">
                    <label for="zona" class="font-weight-bold">Zone</label>
                    <select id="zona" name ="zona" class="form-control">
                      <option selected disabled>Choose...</option>
                      <option value="zona">Zone</option>
                    </select>
                    @error('zona')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group col-6">
                    <label for="circun" class="font-weight-bold">Circunscripcion</label>
                    <select id="circun" name ="circun" class="form-control">
                      <option selected disabled>Choose...</option>
                      <option value="circun">circun</option>
                    </select>
                    @error('circun')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group col-6">
                    <label for="junta_no" class="font-weight-bold">Junta No</label>
                    <select id="junta_no" name ="junta_no" class="form-control">
                      <option selected disabled>Choose...</option>
                      <option value="junta_no">Junta</option>
                    </select>
                    @error('junta_no')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
               
                <input type="submit" class="btn  float-right comon_color_btn submit_btn" value="Next" >
              </form>
          </div>
        </div>


      </div>

    </div>

@endsection('content')

@section('javascript')
<script>

</script>
@endsection('javascript')
