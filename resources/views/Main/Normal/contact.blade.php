@extends('layout.main')
@section('content')
    <!-- ======================= Top Breadcrubms ======================== -->
    <div class="gray py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Top Breadcrubms ======================== -->
    
    <!-- ======================= Contact Page Detail ======================== -->
    <section class="middle">
        <div class="container">
        
            <div class="row justify-content-center mb-5">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="off_title">Contact Us</h2>
                    </div>
                </div>
            </div>
            
            <div class="row align-items-start justify-content-between">
            
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="card-wrap-body mb-4 gray rounded p-3">
                        <p>Are you looking to talk to an expert about the best solution for your work or workforce challenges? Just fill out this information below, and we'll reach out to you within one business day. Contact us at Tel. One of our agents will administer your request.
                            Or, if you’d prefer, fill out the form to submit an email.
                        </p>
                    </div>
                    
                    <div class="card-wrap-body mb-3 gray rounded p-3">
                        <h4 class="ft-medium mb-3 theme-cl">Contact Details</h4>
                        <h6 class="ft-medium mb-1">Address:</h6>
                        <p class="mb-2">1018 Willowdale Avenue, Toronto ON M2M
                            3E1, Canada									
                        </p>
                        <h6 class="ft-medium mb-1">Customer Care:</h6>
                        <p class="mb-2">647-615-9325</p>
                        <h6 class="ft-medium mb-1">Careers:</h6>
                        <p>647-615-9325 </p>
                    </div>
                    
                    <div class="card-wrap-body mb-3 gray rounded p-3">
                        <h4 class="ft-medium mb-3 theme-cl">Drop A Mail</h4>
                        <p>Fill out our form and we will contact you within 24 hours.</p>
                        <p class="lh-1 text-dark">adim@xealstaffing.ca</p>
                    </div>
                </div>
                
                <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
                    <form class="row" method="post" id="upload-form">
                        @csrf    
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">Your Name *</label>
                                <input type="text" class="form-control"  name ="name_user" placeholder="Your Name">
                                <b><span class="text-danger" id="name_user-input-error"></span></b>
                            </div>
                        </div>
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">Your Email *</label>
                                <input type="text" class="form-control" name="email" placeholder="Your Email">
                                <b><span class="text-danger" id="email-input-error"></span></b>
                            </div>
                        </div>
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">Subject</label>
                                <input type="text" class="form-control" name="subject" placeholder="Type Your Subject">
                                <b><span class="text-danger" id="subject-input-error"></span></b>
                            </div>
                        </div>
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">Message</label>
                                <textarea class="form-control ht-80" name="message"></textarea>
                                <b><span class="text-danger" id="message-input-error"></span></b>
                            </div>
                        </div>
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark">Send Message</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ======================= Contact Page End ======================== -->
    
    <!-- ======================= Newsletter Start ============================ -->
    <section class="space bg-cover" style="background:#03343b url(assets/img/landing-bg.png) no-repeat;">
        <div class="container py-5">
            
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="text-light mb-0">Subscribe Now</h6>
                        <h2 class="ft-bold text-light">Get All New Job Notification</h2>
                    </div>
                </div>
            </div>
            
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12">
                    <form class="bg-white rounded p-1">
                        <div class="row no-gutters">
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                <div class="form-group mb-0 position-relative">
                                    <input type="text" class="form-control lg left-ico" placeholder="Enter Your Email Address">
                                    <i class="bnc-ico lni lni-envelope"></i>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                <div class="form-group mb-0 position-relative">
                                    <button class="btn full-width custom-height-lg theme-bg text-light fs-md" type="button">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </section>
    <!-- ======================= Newsletter Start ============================ -->

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
       $('#upload-form').submit(function(e) {
           e.preventDefault();
           let formData = new FormData(this);
           $('#name_user-input-error').text('');
           $('#email-input-error').text('');
           $('#subject-input-error').text('');
           $('#message-input-error').text('');
           $.ajax({
              type:'POST',
              url: `/messege`,
               data: formData,
               contentType: false,
               processData: false,
               success: (response) => {
                if(response.code == 200){
                    this.reset();
                        Swal.fire(
                            'Messege sent successfuly!',
                            'success'
                        ).then(function(){
                            window.location.href = "/";
                        });
                    }
               },
               error: function(response){
                    $('#name_user-input-error').text(response.responseJSON.errors.name_user);
                    $('#email-input-error').text(response.responseJSON.errors.email);
                    $('#subject-input-error').text(response.responseJSON.errors.subject);
                    $('#message-input-error').text(response.responseJSON.errors.message);
                    
               }
           });
      });
    
    </script>

    @endsection