@extends('layout.admin')
@section('content')
<div class="dashboard-content">
    <div class="dashboard-tlbar d-block mb-5">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <div class="form-group align-to-centre">
                    <button  class="btn btn-md ft-medium text-light rounded theme-bg">
                        <a href="#" data-toggle="modal" data-target="#addcompany" class="ft-large" style="color: #fff;">
                            <i class="lni lni-circle-plus mr-1"></i>Create New Company Profile
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="dashboard-widg-bar d-block">
        <br>
        <div class="row">
           <p></p>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="mb-4 tbl-lg rounded overflow-hidden">
                    <div class="table-responsive bg-white">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Company Name</th>
                                  <th scope="col">Telephone Number</th>
                                  <th scope="col">Location</th>
                                  <th scope="col">PO BOX</th>
                                  <th scope="col">Attached Applicants</th>
                                  <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($company as $value)
                                    <tr>
                                        <td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">{{$value->name}}</h4></div></td>
                                        <td>{{$value->phone_number}}</td>
                                        <td>{{$value->location}}</td>
                                        <td>{{$value->address}}</td>
                                        <td>{{$value->applicants}}</td>
                                        <td>
                                            <div class="dash-action">
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#addcompany{{$value->id}}" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
                                                <a href="javascript:void(0);"  data-id="{{ $value->id }}" onclick="deletePost(event.target)" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"  data-id="{{ $value->id }}"></i></a>
                                            </div>
                                        </td>

                                        <!-- Update Company Modal -->
                                            <div class="modal fade" id="addcompany{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true" data-backdrop="false">
                                                <div class="modal-dialog modal-xl login-pop-form" role="document">
                                                    <div class="modal-content" id="addcompany{{$value->id}}">
                                                        <div class="modal-headers">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span class="ti-close"></span>
                                                            </button>
                                                        </div>
                                                    
                                                        <div class="modal-body p-5">
                                                            <div class="text-center mb-4">
                                                                <h2 class="m-0 ft-regular">Update {{$value->name}}</h2>
                                                            </div>
                                                            
                                                            <div class="_dashboard_content_body py-3 px-3">
                                                                <form class="row">
                                                                    <input type="hidden" id="edit_id" value="{{$value->id}}">
                                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="text-dark ft-medium">Company Name</label>
                                                                            <input type="text" class="form-control rounded" placeholder="Full Company Name" id="nameupdate" value="{{$value->name}}">
                                                                            <b><span id="nameupdatError" class="text-danger"></span></b>
                                                                        </div>
                                                                    </div>	
                                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="text-dark ft-medium">Telephone Number</label>
                                                                            <input type="text" class="form-control rounded" placeholder="e.g. 0770100000" id="phonenumberupdate" value="{{$value->phone_number}}">
                                                                            <b><span id="phonenumberupdateError" class="text-danger"></span></b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="text-dark ft-medium">Location</label>
                                                                            <input type="text" class="form-control rounded" placeholder="e.g. Kampala-Uganda" id="locationupdate" value="{{$value->location}}">
                                                                            <b><span id="locationupdateError" class="text-danger"></span></b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="text-dark ft-medium">PO BOX</label>
                                                                            <input type="text" class="form-control rounded" placeholder="address" id="addressupdate" value="{{$value->address}}">
                                                                            <b><span id="addressupdateError" class="text-danger"></span></b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12">
                                                                        <div class="form-group align-to-right">
                                                                            <button type="button" onclick="update()" class="btn btn-md ft-medium text-light rounded theme-bg">Update Details</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- End Modal -->
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                        {{ $company->links('vendor.pagination.default') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Company Modal -->
<div class="modal fade" id="addcompany" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
    <div class="modal-dialog modal-xl login-pop-form" role="document">
        <div class="modal-content" id="addcompany">
            <div class="modal-headers">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span class="ti-close"></span>
                </button>
              </div>
        
            <div class="modal-body p-5">
                <div class="text-center mb-4">
                    <h2 class="m-0 ft-regular">Register Company</h2>
                </div>
                
                <div class="_dashboard_content_body py-3 px-3">
                    <form class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label class="text-dark ft-medium">Company Name</label>
                                <input type="text" class="form-control rounded" placeholder="Full Company Name" id="name">
                                <b><span id="nameError" class="text-danger"></span></b>
                            </div>
                        </div>	
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="text-dark ft-medium">Telephone Number</label>
                                <input type="text" class="form-control rounded" placeholder="e.g. 0770100000" id="phonenumber">
                                <b><span id="phonenumberError" class="text-danger"></span></b>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="text-dark ft-medium">Location</label>
                                <input type="text" class="form-control rounded" placeholder="e.g. Kampala-Uganda" id="location">
                                <b><span id="locationError" class="text-danger"></span></b>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label class="text-dark ft-medium">PO BOX</label>
                                <input type="text" class="form-control rounded" placeholder="address" id="address">
                                <b><span id="addressError" class="text-danger"></span></b>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="form-group align-to-right">
                                <button type="button" onclick="motivation()" class="btn btn-md ft-medium text-light rounded theme-bg">Register Company</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->


<script>
    function motivation(){
        var name = $('#name').val();
        var phonenumber = $('#phonenumber').val();
        var location = $('#location').val();
        var address = $('#address').val();

        let _URL = '/add-company';

        $.ajax({
            url:_URL,
            type: 'POST',
            data:{
               phonenumber:phonenumber,
               name:name,
               location:location,
               address:address,
               "_token": "{{ csrf_token() }}",
            },
            success: function(response){
                if(response.code == 200){
                    Swal.fire(
                        'Company added successfuly!',
                        'success'
                    ).then(function(){
                        window.location.href = "/company";
                    });
                }
            },
            error:function(response){
                $('#phonenumberError').text(response.responseJSON.errors.phonenumber);
                $('#locationError').text(response.responseJSON.errors.location);
                $('#nameError').text(response.responseJSON.errors.name);
                $('#addressError').text(response.responseJSON.errors.address);
            },
        })
    }

    function update(){
        var name = $('#nameupdate').val();
        var phonenumber = $('#phonenumberupdate').val();
        var location = $('#locationupdate').val();
        var address = $('#addressupdate').val();
        var id = $('#edit_id').val();

        let _URL = `/update-company/${id}`;

        $.ajax({
            url:_URL,
            type: 'PUT',
            data:{
               phonenumber:phonenumber,
               name:name,
               location:location,
               address:address,
               "_token": "{{ csrf_token() }}",
            },
            success: function(response){
                if(response.code == 200){
                    Swal.fire(
                        'Company Info updated successfuly!',
                        'success'
                    ).then(function(){
                        window.location.href = "/company";
                    });
                }
            },
            error:function(response){
                $('#phonenumberupdateError').text(response.responseJSON.errors.phonenumber);
                $('#locationupdateError').text(response.responseJSON.errors.location);
                $('#nameupdateError').text(response.responseJSON.errors.name);
                $('#addressupdateError').text(response.responseJSON.errors.address);
            },
        })
    }

    function deletePost(event) {
        var id = $(event).data("id");
        let _url = `/delete-company/${id}`;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        Swal.fire({
            title: 'Are you sure?'
            , text: "You won't be able to revert this!"
            , icon: 'warning'
            , showCancelButton: true
            , confirmButtonColor: '#3085d6'
            , cancelButtonColor: '#d33'
            , confirmButtonText: 'Yes, delete company!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: _url
                    , type: 'DELETE'
                    , data: {
                        id: id,
                        "_token": "{{ csrf_token() }}"
                    , }
                    , success: function(response) {
                        if (response.code == 200) {
                            Swal.fire(
                                'Deleted!'
                                , 'Company has been deleted.'
                                , 'success'
                            ).then(function(){
                                 window.location.href = "/company";
                            });
                            //toastr.success(response.notification.message);
                        }
                    },
                    error: function(response) {
                          if(response.code == 33){
                             toastr.error("You are not Authorized to perform this Action!");
                          }      
                    }, 
                });
            }
        })



    }
</script>
@endsection