@extends('layouts.main')

@section('content')
@include('Admin.admintt')
<!-- Political party section -->
<div class="political_party_div">
    <div class="document_heading container-fluid">
        <!-- <form > -->
        <div class="form-row mt-3">
            <div class="form-group col-sm-12 col-md-4 col-lg-4 has-search">
                <span class="fa fa-search form-control-feedback"></span>
                <input type="text" class="form-control" id="search" name="search" placeholder="Search Candidate">

            </div>
            <div class="btn_parent_div form-group col-sm-12  col-md-8 col-lg-8 d-flex ">
                <div class="row">

                    <button class="btn filter_btn Candidate_btns multi_btn"><i class="fa fa-upload mr-1" aria-hidden="true"></i>Import
                    </button>
                    <button class="btn filter_btn Candidate_btns multi_btn"><i class="fa fa-download mr-1" aria-hidden="true"></i>Export
                    </button>
                    <button class="btn filter_btn Candidate_btns multi_btn"><img src="images/filter_icon.png" class="filter_icon">Filters
                    </button>
                    <button class="btn filter_btn Candidate_btns comon_color_btn AddCandidate" data-toggle="modal" data-target="#AddPartyModal"><i class="fa-solid fa-plus mr-1"></i>Add
                    </button>

                </div>
            </div>
        </div>
        <!-- </form> -->

    </div>
    <div class="table_div container-fluid">

        <table id="table_datatable" class="table">
            <thead class="table_head">
                <tr>
                    <th scope="col">Logo</th>
                    <th scope="col">Name of political party</th>
                    <th scope="col">Level</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($PoliticalParty as $PoliticalParties)
                <tr>
                    <th scope="row"><img src="images/party_logo.png" class="table_candidate_img"></th>
                    <td>{{$PoliticalParties->party_name}}</td>
                    <td>{{$PoliticalParties->party_level}}</td>
                    <td class="d-flex">
                        <a href="#" class=" ml-1 text-dark edit_delete_btn" data-toggle="modal" data-target="#DeleteModal" data-id="{{$PoliticalParties->id}}"><i class="fa far fa-trash-alt"></i></a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>


    </div>
    

    <!-- end here  -->

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
<!-- end here -->

<div class="modal fade" id="AddPartyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog modal-dialog-centered m-auto" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Political Party</h5>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger " style="display:none"></div>
                    <div class="form_div w-100">
                        <form id="AddParty" name="AddParty">
                            <div class="form-row mt-3 d-flex flex-row ">
                                <div class="form-group  candidate_photo">
                                    <img src="images/can_camera.png" class="can_cam_image">
                                    <p class="candidate_p_style">Candidate Photo</p>
                                    <input type="file" class="form-control d-none" id="Drag_drop_field" name="Drag_drop_file">

                                </div>
                            </div>
                            <div class="form-row">

                                <div class="form-group col-12">
                                    <label for="Political_Party" class="">Political Party</label>
                                    <input type="text" class="form-control" id="Political_Party" name="Political_Party" placeholder="Enter Party Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="level">Level</label>
                                    <select id="party_level" name="party_level" class="form-control">
                                        <option selected="true" disabled="disabled">Choose Level of Political Party</option>
                                        <option value="1">Level One</option>
                                        <option value="2">Level two</option>
                                        <option value="3">Level Three</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save_btn AddParty">Update</button>
                </div>
            </div>
        </div>
    </div>
@endsection('content')

@section('javascript')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(()=>{

        $('#table_datatable').DataTable({
            language: {
                searchPlaceholder: "Search Tables",
                search: ''
            }
        });
        $(".AddParty").click(function(event) {
            event.preventDefault();
            $.LoadingOverlay("show");
            var form = $('#AddParty')[0];
            var formdata = new FormData(form);
            console.log(formdata + 'test');
            $.ajax({
                type: "POST",
                url: "{{ route('savePoliticalParty')}}",
                processData: false,
                contentType: false,
                cache: false,
                data: formdata,
                enctype: 'multipart/form-data',
                success: function(result) {
                    $.LoadingOverlay("hide");

                    if (result.errors) {
                        $.toaster({ priority :'danger', title :'Wrong', message :'All Fields Required'});
                    } else {
                        Swal.fire({
                            type: 'success',
                            title: 'Political Party Added!',
                            text: 'New Political Party is Added 🔥',
                            showConfirmButton: false,
                            timer: 4000
                        })
                        setTimeout(() => {
                            location.reload();
                        }, 2000);
                    }
                },
                error: function() {
                    alert("Error");
                }
            });
        });

        $('#DeleteModal').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget)
            var id = button.data('id')
            $('#delete_id').val(id);
        })
        $('.delete_btn').click(() => {
            event.preventDefault();
            let get_id = $('#delete_id').val();
            $.ajax({
                type: "POST",
                url: "{{ route('deletePoliticalPparty')}}",
                cache: false,
                data: {
                    'get_id': get_id
                },
                success: function(result) {
                    $('#DeleteModal').modal('hide')
                    Swal.fire({
                        type: 'success',
                        title: 'Political Party Deleted!',
                        text: 'Political Party is Deleted Successfully ✨',
                        showConfirmButton: false,
                        timer: 4000
                    })
                    setTimeout(() => {
                        location.reload();
                    }, 2000);

                },
                error: function() {
                    alert("Error");
                }
            });
        });
    });

</script>
@endsection('javascript')