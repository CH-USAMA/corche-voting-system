@extends('layouts.main')

@section('content')
@include('Admin.admintt')
<!-- Main Content Here -->
<!-- Main adminData Here -->
 <!-- tables section -->
 <div class="table_section_div">
                <div class="document_heading container-fluid">
                    <!-- <form > -->
                    <div class="form-row mt-3">
                        <div class="form-group col-sm-12 col-md-4 col-lg-4 has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" id="search" name="search"
                                placeholder="Search Tables">

                        </div>
                        <div class="btn_parent_div form-group col-sm-12  col-md-8 col-lg-8 d-flex ">
                            <div class="row">

                                <button data-toggle="modal" data-target="#uploadModal" class="btn filter_btn Candidate_btns multi_btn"><i class="fa fa-upload mr-1"
                                        aria-hidden="true"></i>Import
                                </button>
                                <a href="{{ route('export') }}" class="btn filter_btn Candidate_btns multi_btn"><i class="fa fa-download mr-1"
                                        aria-hidden="true"></i>Export
                                </a>
                                <button class="btn filter_btn Candidate_btns multi_btn"><img
                                        src="images/filter_icon.png" class="filter_icon">Filters
                                </button>

                            </div>
                        </div>
                    </div>
                    <!-- </form> -->

                </div>
                <div  class="table_div container-fluid">

                    <table id="table_datatable" class="table" >
                        <thead class="table_head">
                            <tr>
                                <th scope="col">Provincia</th>
                                <th scope="col">Canton</th>
                                <th scope="col">Parroquia</th>
                                <th scope="col">Circunscripcion</th>
                                <th scope="col">Zona</th>
                                <th scope="col">Junta No.</th>
                                <th scope="col">Voters</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($electionDetails))
                            @foreach($electionDetails as $elec)
                            <tr>
                                <th scope="row">{{ $elec->provincia}}</th>
                                <td>{{ $elec->canton}}</td>
                                <td>{{ $elec->parroquia}}</td>
                                <td>{{ $elec->circun}}</td>
                                <th >{{ $elec->zona}}</th>
                                <td>{{ $elec->junta_no}}</td>
                                <td>{{ $elec->voters}}</td>
                                <td class="d-flex">
                                    <a data-id = "{{ $elec->id}}" href="#" class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#DeleteModal"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            @endforeach
                            

                        </tbody>
                    </table>
                    
                @endif


                </div>
            </div>
            <!-- end here -->

            <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="DeleteModalTitle" aria-hidden="true">
            <div class="delete_modal modal-dialog modal-dialog-centered m-auto" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                </div>
                <form id="deleteCandidate">
                <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                <img src="images/delete_pic.png" class="delete_image">
                <p class="delete_text">Are you sure you want to delete?</p>
                <input type="hidden" name="delete_id" id="delete_id" value="">
                </div>
                <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary no_btn" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary comon_color_btn yes_btn delete_btn">Yes</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


@endsection('content')

@section('javascript')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
$('#table_datatable').DataTable(
    {
    language: {
        searchPlaceholder: "Search Tables",
        search:''
    }
}
);
</script>
@endsection('javascript')











