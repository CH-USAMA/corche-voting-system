@extends('layouts.main')

@section('content')
@include('Admin.admintt')
<!-- Main Content Here -->
<!-- Main adminData Here -->
 <!-- tables section -->
 <!-- candidates section -->
 <div class="candidate_section_div ">
                <div class="document_heading container-fluid">
                    <!-- <form > -->
                    <div class="form-row mt-3">
                        <div class="form-group col-sm-12 col-md-4 col-lg-4 has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" id="search" name="search"
                                placeholder="Search Candidate">

                        </div>
                        <div class="btn_parent_div form-group col-sm-12  col-md-8 col-lg-8 d-flex ">
                            <div class="row">

                                <button class="btn filter_btn Candidate_btns multi_btn"><i class="fa fa-upload mr-1"
                                        aria-hidden="true"></i>Import
                                </button>
                                <button class="btn filter_btn Candidate_btns multi_btn"><i class="fa fa-download mr-1"
                                        aria-hidden="true"></i>Export
                                </button>
                                <button class="btn filter_btn Candidate_btns multi_btn"><img
                                        src="images/filter_icon.png" class="filter_icon">Filters
                                </button>

                            </div>
                        </div>
                    </div>
                    <!-- </form> -->

                </div>
                <div class="table_div container-fluid">

                    <table class="table">
                        <thead class="table_head">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Political Party</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email ID</th>
                                <th scope="col">Position</th>
                                <th scope="col">State</th>
                                <th scope="col">City</th>
                                <th scope="col">Parroquias</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>

                        </tbody>
                    </table>


                </div>
            </div>
            <!-- end here -->


@endsection('content')

@section('javascript')

@endsection('javascript')











