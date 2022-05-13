@extends('layout.admin')
@section('content')

<div class="dashboard-content">
    
    <div class="dashboard-widg-bar d-block">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="dash-widgets py-5 px-4 bg-info rounded">
                    <h2 class="ft-medium mb-1 fs-xl text-light">{{$applicants}}</h2>
                    <p class="p-0 m-0 text-light fs-md">Pending Applicantions</p>
                    <i class="lni lni-empty-file"></i>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="dash-widgets py-5 px-4 bg-dark rounded">
                    <h2 class="ft-medium mb-1 fs-xl text-light">{{$succesful_applicants}}</h2>
                    <p class="p-0 m-0 text-light fs-md">Successfull Applicants
                    <i class="lni lni-users"></i>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="dash-widgets py-5 px-4 bg-warning rounded">
                    <h2 class="ft-medium mb-1 fs-xl text-light">{{$company}}</h2>
                    <p class="p-0 m-0 text-light fs-md">Companies On Board</p>
                    <i class="lni lni-bar-chart"></i>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="dash-widgets py-5 px-4 bg-purple rounded">
                    <h2 class="ft-medium mb-1 fs-xl text-light">{{$applicants + $succesful_applicants}}</h2>
                    <p class="p-0 m-0 text-light fs-md">Overroll Applicants</p>
                    <i class="lni lni-heart"></i>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="dashboard-gravity-list with-icons">
                    <h4 class="mb-0 ft-medium">Latest Applicants</h4>
                    <ul>
                        @foreach ($latest as $item)
                            <li>
                                <i class="dash-icon-box ti-star text-success bg-light-success"></i>{{$item->full_name}} <div class="numerical-rating high" data-rating="{{$loop->iteration}}"></div> Desired Position: <strong class="ft-medium text-dark"><a href="#">{{$item->job_category}}</a></strong>
                                <a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
            {{-- <div class="col-lg-6 col-md-12">
                <div class="dashboard-gravity-list invoices with-icons">
                    <h4 class="mb-0 ft-medium">Invoices</h4>
                    <ul>
                        
                        <li><i class="dash-icon-box ti-files text-warning bg-light-warning"></i>
                            <strong class="ft-medium text-dark">Starter Plan</strong>
                            <ul>
                                <li class="unpaid">Unpaid</li>
                                <li>Order: #20551</li>
                                <li>Date: 01/08/2019</li>
                            </ul>
                            <div class="buttons-to-right">
                                <a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
                            </div>
                        </li>
                        
                        <li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
                            <strong class="ft-medium text-dark">Basic Plan</strong>
                            <ul>
                                <li class="paid">Paid</li>
                                <li>Order: #20550</li>
                                <li>Date: 01/07/2019</li>
                            </ul>
                            <div class="buttons-to-right">
                                <a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
                            </div>
                        </li>

                        <li><i class="dash-icon-box ti-files text-danger bg-light-danger"></i>
                            <strong class="ft-medium text-dark">Extended Plan</strong>
                            <ul>
                                <li class="paid">Paid</li>
                                <li>Order: #20549</li>
                                <li>Date: 01/06/2019</li>
                            </ul>
                            <div class="buttons-to-right">
                                <a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
                            </div>
                        </li>
                        
                        <li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
                            <strong class="ft-medium text-dark">Platinum Plan</strong>
                            <ul>
                                <li class="paid">Paid</li>
                                <li>Order: #20548</li>
                                <li>Date: 01/05/2019</li>
                            </ul>
                            <div class="buttons-to-right">
                                <a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
                            </div>
                        </li>
                        
                        <li><i class="dash-icon-box ti-files text-warning bg-light-warning"></i>
                            <strong class="ft-medium text-dark">Extended Plan</strong>
                            <ul>
                                <li class="paid">Paid</li>
                                <li>Order: #20547</li>
                                <li>Date: 01/04/2019</li>
                            </ul>
                            <div class="buttons-to-right">
                                <a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
                            </div>
                        </li>
                        
                        <li><i class="dash-icon-box ti-files text-info bg-light-info"></i>
                            <strong class="ft-medium text-dark">Platinum Plan</strong>
                            <ul>
                                <li class="paid">Paid</li>
                                <li>Order: #20546</li>
                                <li>Date: 01/03/2019</li>
                            </ul>
                            <div class="buttons-to-right">
                                <a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>	 --}}
        </div>	
            
    </div>
</div>	
@endsection