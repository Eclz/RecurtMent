@extends('layout.main')
@section('content')

<div class="dashboard-content">
    <form method="post" id="upload-form" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="_dashboard_content bg-white rounded mb-4">
                    <div class="_dashboard_content_header br-bottom py-3 px-3">
                        <div class="_dashboard__header_flex">
                            <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>Applicant information</h4>	
                        </div>
                    </div>
                    
                    <div class="_dashboard_content_body py-3 px-3">
                        <div class="row">
                            {{-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <div class="custom-file avater_uploads">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile"><i class="fa fa-user"></i></label>
                                </div>
                            </div> --}}
                            
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Full Name</label>
                                            <input type="text" class="form-control rounded" placeholder="Rogger James" name="full_name">
                                            <b><span class="text-danger" id="full_name-input-error"></span></b>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Address</label>
                                            <input type="text" class="form-control rounded" placeholder="Street No" name="address">
                                            <b><span class="text-danger" id="address-input-error"></span></b>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Job Category</label>
                                            <select class="form-control rounded" name="job_category">
                                               <option></option>
                                               <option value="Shelter staffing">Shelter staffing</option>
                                               <option value="Janitorial Services">Janitorial Services</option>
                                               <option value="Health Care Services">Health Care Services</option>
                                               <option value="General Labor">General Labor</option>
                                            </select>
                                            <b><span id="job_category-input-error" class="text-danger"></span></b>
                                        </div>
                                    </div>
                                    {{-- <div class="col-xl-4">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Job Category</label>
                                            <input type="text" class="form-control rounded" placeholder="Job Category" name="job_category">
                                            <b><span class="text-danger" id="job_category-input-error"></span></b>
                                        </div>
                                    </div> --}}
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Phone Number</label>
                                            <input type="text" class="form-control rounded" placeholder=" +1(647) 0000000" name="phone">
                                            <b><span class="text-danger" id="phone-input-error"></span></b>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-3">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">City</label>
                                            <input type="text" class="form-control rounded" placeholder="Toronto" name="city">
                                            <b><span class="text-danger" id="city-input-error"></span></b>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Attach CV</label>
                                            <input type="file" class="form-control rounded" value="Park View 365" name="attach_cv">
                                            <b><span class="text-danger" id="attach_cv-input-error"></span></b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Add Education -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="_dashboard_content bg-white rounded mb-4">
                    <div class="_dashboard_content_header br-bottom py-3 px-3">
                        <div class="_dashboard__header_flex">
                            <h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Education Details</h4>	
                        </div>
                    </div>
                    
                    <div class="_dashboard_content_body py-3 px-3">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="gray rounded p-3 mb-3 position-relative">
                                    <button class="aps-clone"><i class="fas fa-times"></i></button>
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Area of Study</label>
                                        <input type="text" class="form-control rounded" placeholder="e.g. Accounting" name="study_area">
                                        <b><span class="text-danger" id="study_area-input-error"></span></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </div>	
        <!-- Add Education -->
        
        <!-- Add Experience -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="_dashboard_content bg-white rounded mb-4">
                    <div class="_dashboard_content_header br-bottom py-3 px-3">
                        <div class="_dashboard__header_flex">
                            <h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Experience Details</h4>	
                        </div>
                    </div>
                    
                    <div class="_dashboard_content_body py-3 px-3">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="gray rounded p-3 mb-3 position-relative">
                                    <button class="aps-clone"><i class="fas fa-times"></i></button>
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Employer</label>
                                        <input type="text" class="form-control rounded" placeholder="Employer Name" name="employer">
                                        <b><span class="text-danger" id="employer-input-error"></span></b>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Job Title</label>
                                        <input type="text" class="form-control rounded" placeholder="Designation Title" name="job_title">
                                        <b><span class="text-danger" id="job_title-input-error"></span></b>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Start Date</label>
                                                <input type="date" class="form-control rounded" placeholder="dd-mm-yyyy" name="start">
                                                <b><span class="text-danger" id="start-input-error"></span></b>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">End Date</label>
                                                <input type="date" class="form-control rounded" placeholder="dd-mm-yyyy" name="end">
                                                <b><span class="text-danger" id="end-input-error"></span></b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Summary of responsibilities</label>
                                        <textarea class="form-control ht-80" placeholder="Note Optional" name="note"></textarea>
                                        <b><span class="text-danger" id="note-input-error"></span></b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <button type="button" class="btn gray ft-medium apply-btn fs-sm rounded"><i class="fas fa-plus mr-1"></i>Add Experience</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        <!-- Add Experience -->
        
        <!-- Add Skills -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="_dashboard_content bg-white rounded mb-4">
                    <div class="_dashboard_content_header br-bottom py-3 px-3">
                        <div class="_dashboard__header_flex">
                            <h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Skills Details</h4>	
                        </div>
                    </div>
                    
                    <div class="_dashboard_content_body py-3 px-3">
                        <div class="row" id="myForm">
                            <div class="col-xl-12 col-lg-12">
                                <div class="gray rounded p-3 mb-3 position-relative">
                                    <button class="aps-clone"><i class="fas fa-times"></i></button>
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Skills Name</label>
                                        <input type="text" class="form-control rounded" placeholder="Leadership,Problem solving,Communication..(Separate these skills with commas)" name="skill">
                                        <b><span class="text-danger" id="skill-input-error"></span></b>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <button type="button" class="btn gray ft-medium apply-btn fs-sm rounded"><i class="fas fa-plus mr-1"></i>Add Skills</button>
                                    <input type="button" class="btn gray ft-medium apply-btn fs-sm rounded" onclick="myFunction()" value="Submit" style="color: #fff; background-color: chartreuse; ">
                                    <script>
                                    function myFunction() {
                                        document.getElementById("myForm").reset();
                                    }
                                    </script>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        <!-- Add Skills -->
        
        <!-- Professional References -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="_dashboard_content bg-white rounded mb-4">
                    <div class="_dashboard_content_header br-bottom py-3 px-3">
                        <div class="_dashboard__header_flex">
                            <h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Professional References</h4>	
                        </div>
                    </div>
                    
                    <div class="_dashboard_content_body py-3 px-3">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="gray rounded p-3 mb-3 position-relative">
                                    <button class="aps-clone"><i class="fas fa-times"></i></button>
                                    <div class="form-row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Reference 1</label>
                                                <input type="text" class="form-control rounded" placeholder="Name" name="name1">
                                                <b><span class="text-danger" id="name1-input-error"></span></b>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Phone Number</label>
                                                <input type="text" class="form-control rounded" placeholder="Mobile" name="phone1">
                                                <b><span class="text-danger" id="phone1-input-error"></span></b>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Reference 2</label>
                                                <input type="text" class="form-control rounded" placeholder="Name" name="name2">
                                                <b><span class="text-danger" id="name2-input-error"></span></b>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Phone Number</label>
                                                <input type="text" class="form-control rounded" placeholder="Mobile" name="phone2">
                                                <b><span class="text-danger" id="phone2-input-error"></span></b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        <!-- Professional References -->

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Save & Preview</button>
            </div>	
        </div>
    </form>
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
       $('#name-input-error').text('');
       $('#full_name-input-error').text('');
       $('#address-input-error').text('');
       $('#job_category-input-error').text('');
       $('#phone-input-error').text('');
       $('#city-input-error').text('');
       $('#attach_cv-input-error').text('');
       $('#study_area-input-error').text('');
       $('#employer-input-error').text('');
       $('#job_title-input-error').text('');
       $('#start-input-error').text('');
       $('#end-input-error').text('');
       $('#note-input-error').text('');
       $('#skill-input-error').text('');
       $('#name1-input-error').text('');
       $('#name2-input-error').text('');
       $('#name3-input-error').text('');
       $('#phone1-input-error').text('');
       $('#phone2-input-error').text('');
       $('#phone3-input-error').text('');


       $.ajax({
          type:'POST',
          url: `/save`,
           data: formData,
           contentType: false,
           processData: false,
           success: (response) => {
            if(response.code == 200){
                this.reset();
                    Swal.fire(
                        'Information Added successfuly!',
                        'success'
                    ).then(function(){
                        window.location.href = "/";
                    });
                }
           },
           error: function(response){
                $('#file-input-error').text(response.responseJSON.errors.file);
                $('#name-input-error').text(response.responseJSON.errors.name);
                $('#full_name-input-error').text(response.responseJSON.errors.full_name);
                $('#address-input-error').text(response.responseJSON.errors.address);
                $('#job_category-input-error').text(response.responseJSON.errors.job_category);
                $('#phone-input-error').text(response.responseJSON.errors.phone);
                $('#city-input-error').text(response.responseJSON.errors.city);
                $('#attach_cv-input-error').text(response.responseJSON.errors.attach_cv);
                $('#study_area-input-error').text(response.responseJSON.errors.study_area);
                $('#employer-input-error').text(response.responseJSON.errors.employer);
                $('#job_title-input-error').text(response.responseJSON.errors.job_title);
                $('#start-input-error').text(response.responseJSON.errors.start);
                $('#end-input-error').text(response.responseJSON.errors.end);
                $('#note-input-error').text(response.responseJSON.errors.note);
                $('#skill-input-error').text(response.responseJSON.errors.skill);
                $('#name1-input-error').text(response.responseJSON.errors.name1);
                $('#name2-input-error').text(response.responseJSON.errors.name2);
                $('#name3-input-error').text(response.responseJSON.errors.name3);
                $('#phone1-input-error').text(response.responseJSON.errors.phone1);
                $('#phone2-input-error').text(response.responseJSON.errors.phone2);
                $('#phone3-input-error').text(response.responseJSON.errors.phone3);
                
           }
       });
  });

</script>

@endsection