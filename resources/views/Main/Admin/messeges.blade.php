@extends('layout.admin')
@section('content')

<div class="dashboard-content">
    <div class="dashboard-tlbar d-block mb-5">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <h1 class="ft-medium">Messages</h1>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline" action="/messeges-admin" method="POST">
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
                              <th scope="col">Subject</th>
                              {{-- <th scope="col">Assigned Company</th> --}}
                              <th scope="col">Email</th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applicant as $value)
                                <tr>
                                    <td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">{{$value->name_user}}</h4></div></td>
                                    <td>{{$value->subject}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>
                                        @if ($value->status == 1)
                                           <span class="badge badge-success">Read</span> 
                                        @else
                                           <span class="badge badge-warning">UnRead</span> 
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dash-action">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view{{$value->id}}"class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
                                            <a href="javascript:void(0);"  data-id="{{ $value->id }}" onclick="deletePost(event.target)" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"  data-id="{{ $value->id }}"></i></a>
                                        </div>
                                    </td>


                                    <div class="modal" tabindex="-1" id="view{{$value->id}}" role="dialog" data-backdrop="false">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title">Messege from {{$value->name_user}}</h5>
                                              {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> --}}
                                                {{-- <span aria-hidden="true">&times;</span>
                                              </button> --}}
                                            </div>
                                            <form>
                                                <div class="modal-body">
                                                    <ul class="list-group">
                                                        <b>
                                                            <li class="list-group-item">Message:<span style="color:blueviolet"> {{$value->message}}</span> </li>
                                                        </b>
                                                    </ul>
                                                </div>
                                                <input type="hidden" value="{{$value->id}}" id="point">
                                                <div class="modal-footer">
                                                 @if ($value->status == 1)
                                                     <button type="button" data-dismiss="modal" class="btn btn-succuss" >Close</button>
                                                 @else
                                                     <button type="button"  onclick="update()" class="btn btn-warning" >Close</button>
                                                 @endif
                                                
                                                </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
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



{{-- <script>
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

  
</script> --}}

<script>


        function update(){
            var id = $('#point').val();
            let _URL = `/update-message/${id}`;

            $.ajax({
                url:_URL,
                type: 'PUT',
                data:{
                "_token": "{{ csrf_token() }}",
                },
                success: function(response){
                    if(response.code == 200){
                        Swal.fire(
                            'Successfuly Closed!',
                            'success'
                        ).then(function(){
                            window.location.href = "/messeges-admin";
                        });
                    }
                },
                error:function(response){
                },
            })
        }

      function deletePost(event) {
        var id = $(event).data("id");
        let _url = `/delete-messeges/${id}`;
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
                                , 'Messege has been deleted.'
                                , 'success'
                            ).then(function(){
                                 window.location.href = "/messeges-admin";
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