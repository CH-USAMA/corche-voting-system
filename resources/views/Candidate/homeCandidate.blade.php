@extends('layouts.main')

@section('content')

<!-- Main Content Here -->
<div class="main_content">
        <div class="breadCrumbs">
        <p class="breadCrumbs_heading">Home</p>
        </div>
        <div class="form_div_home">
          <h3>Select Detailed</h3>

            <div class="form_div w-100">
              <form class="form" id="adminForm" method="POST" action="">
                @csrf
                <div class="form-row">
                  <div class="form-group col-12">
                    <label for="inputState" class="font-weight-bold">Position</label>
                    <select id="Position" name ="Position" class="form-control">
                      <option selected>Choose...</option>
                      <option value="1">...</option>
                      <option value="1">...</option>
                      <option value="1">...</option>
                      <option value="1">...</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-6">
                    <label for="State" class="font-weight-bold">State</label>
                    <select id="State" name ="State" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="City" class="font-weight-bold">City</label>
                    <select id="City" name ="City" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-6">
                    <label for="Parroquias" class="font-weight-bold">Parroquias</label>
                    <select id="Parroquias" name ="Parroquias" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="Zone" class="font-weight-bold">Zone</label>
                    <select id="Zone" name ="Zone" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-12">
                    <label for="Table" class="font-weight-bold">Table</label>
                    <select id="Table" name ="Table" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                </div>
                <input type="submit" class="btn  float-right comon_color_btn submit_btn">Next<i class="ml-2 fa fa-arrow-right" aria-hidden="true"></i></input>
              </form>
          </div>
        </div>


      </div>

    </div>

@endsection('content')

@section('javascript')
<script>
  $('document').ready(()=>{

    $('.submit_btn').click((e)=>{
      e.preventDefault();
      alert('sss');
    $('#adminForm').validate({

      rules:{
        Position: "required"
      },message:
      {
        Position:'enter'

      },
      submitHandler: function(form) {
      $(form).ajaxSubmit({
              url:"email.php",
              type:"post",
              success: function(){
                alert('inside');
                $('#contact-form').hide();
                $('#sent').show();
        }
      });
          
    }
    });
    });
});
</script>
@endsection('javascript')
