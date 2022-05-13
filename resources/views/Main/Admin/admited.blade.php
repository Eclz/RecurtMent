@extends('layout.admin')
@section('content')

<div class="dashboard-content">
    <div class="dashboard-tlbar d-block mb-5">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <h1 class="ft-medium">Approved Applicants</h1>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-light bg-light">
        <form class="form-inline" action="/succus-applicant" method="POST">
          @csrf
          <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    
    <div class="dashboard-widg-bar d-block">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="mb-4 tbl-lg rounded overflow-hidden">
                    <div class="table-responsive bg-white">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Name</th>
                                  <th scope="col">Contact</th>
                                  <th scope="col">Assigned Company</th>
                                  <th scope="col">Specialized Field</th>
                                  {{-- <th scope="col">Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($applicant as $value)
                                    <tr>
                                        <td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">{{$value->full_name}}</h4></div></td>
                                        {{-- <td>{{$value->full_name}}</td> --}}
                                        <td>{{$value->phone}}</td>
                                        <td>{{$value->company_assigned}}</td>
                                        <td>{{$value->job_category}}</td>
                                        {{-- <td>
                                            <div class="dash-action">
                                                <a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
                                                <a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
                                                <a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
                                            </div>
                                        </td> --}}
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
</div>

@endsection