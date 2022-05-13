@extends('layout.admin')
@section('content')

<div class="dashboard-content">
    <div class="dashboard-tlbar d-block mb-5">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <h1 class="ft-medium">Manage Applicants</h1>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline" action="/applicant" method="POST">
          @csrf
          <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="mb-4 tbl-lg rounded overflow-hidden">
                <div class="table-responsive bg-white">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                              <th scope="col">Name</th>
                              <th scope="col">Contact</th>
                              {{-- <th scope="col">Assigned Company</th> --}}
                              <th scope="col">Specialized Field</th>
                              <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applicant as $value)
                                <tr>
                                    <td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">{{$value->full_name}}</h4></div></td>
                                    {{-- <td>{{$value->full_name}}</td> --}}
                                    <td>{{$value->phone}}</td>
                                    {{-- <td>{{$value->company_assigned}}</td> --}}
                                    <td>{{$value->job_category}}</td>
                                    <td>
                                        <div class="dash-action">
                                            <a href="/download/{{$value->attach_cv}}"  class="p-2 circle text-warning bg-light-warning d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-download"></i></a>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view{{$value->id}}"class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
                                            <a href="javascript:void(0);"  data-toggle="modal" data-target="#addcompany{{$value->id}}"   class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
                                            <a href="javascript:void(0);"  data-id="{{ $value->id }}" onclick="deletePost(event.target)" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"  data-id="{{ $value->id }}"></i></a>
                                        </div>
                                    </td>


                                    <div class="modal" tabindex="-1" id="view{{$value->id}}" role="dialog" data-backdrop="false">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title">Applicant Details</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="list-group">
                                                    <b>
                                                        <li class="list-group-item">Address:<span style="color:blueviolet"> {{$value->address}}</span> </li>
                                                        <li class="list-group-item">Job Category:<span style="color:blueviolet"> {{$value->job_category}}</span></li>
                                                        <li class="list-group-item">Study Area:<span style="color:blueviolet">{{$value->study_area}}</span></li>
                                                        <li class="list-group-item">Former Employer:<span style="color:blueviolet">{{$value->employer}}</span></li>
                                                        <li class="list-group-item">Job Title:<span style="color:blueviolet">{{$value->job_title}}</span></li>
                                                        <li class="list-group-item">From:<span style="color:blueviolet">{{ \Carbon\Carbon::parse($value->start)->isoFormat('MMM Do YYYY') }}</span></li>
                                                        <li class="list-group-item">To:<span style="color:blueviolet">{{ \Carbon\Carbon::parse($value->end)->isoFormat('MMM Do YYYY') }}</span></li>
                                                        <li class="list-group-item">Note:<span style="color:blueviolet">{{$value->note}}</span></li>
                                                        <li class="list-group-item">Skill:<span style="color:blueviolet">{{$value->skill}}</span></li>
                                                        <li class="list-group-item">Ref:<span style="color:blueviolet">{{$value->name1}}</span></li>
                                                        <li class="list-group-item">Contact:<span style="color:blueviolet">{{$value->phone}}</span></li>
                                                    </b>
                                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                              {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                        </div>
                                    </div>

                                    <!-- Add Company Modal -->
                                        <div class="modal fade" id="addcompany{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true" data-backdrop="false">
                                            <div class="modal-dialog modal-xl login-pop-form" role="document">
                                                <div class="modal-content" id="addcompany">
                                                    <div class="modal-headers">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span class="ti-close"></span>
                                                        </button>
                                                    </div>
                                                
                                                    <div class="modal-body p-5">
                                                        <div class="text-center mb-4">
                                                            <h2 class="m-0 ft-regular">Assign To Company</h2>
                                                        </div>
                                                        
                                                        <div class="_dashboard_content_body py-3 px-3">
                                                            <form class="row" method="post" id="upload-form" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" value="{{$value->id}}" name="user_id">
                                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="text-dark ft-medium">Company Name</label>
                                                                        <select class="form-control rounded" name="assigned">
                                                                           <option></option>
                                                                           @foreach ($company as $item)
                                                                               <option value="{{$item->name}}">{{$item->name}}</option>
                                                                           @endforeach
                                                                        </select>
                                                                        <b><span id="company_nameError" class="text-danger"></span></b>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-12 col-lg-12">
                                                                    <div class="form-group align-to-right">
                                                                        <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Assign</button>
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
                    {{ $applicant->links('vendor.pagination.default') }}
                   
                </div>
            </div>
        </div>
        
    </div>
</div>



<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   $('#upload-form').submit(function(e) {
       e.preventDefault();
       let formData = new FormData(this);
       $('#company_nameError').text('');


        $.ajax({
            type:'POST',
            url: `/update-applicant`,
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                if(response.code == 200){
                    this.reset();
                        Swal.fire(
                            'Attached successfuly!',
                            'success'
                        ).then(function(){
                            window.location.href = "/applicant";
                        });
                    }
            },
            error: function(response){
                $('#company_nameError').text(response.responseJSON.errors.assigned);
            }
        });
    });

  
</script>

<script>
      function deletePost(event) {
        var id = $(event).data("id");
        let _url = `/delete-applicant/${id}`;
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
            , confirmButtonText: 'Yes, delete applicant!'
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
                                , 'Applicant has been deleted.'
                                , 'success'
                            ).then(function(){
                                 window.location.href = "/applicant";
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