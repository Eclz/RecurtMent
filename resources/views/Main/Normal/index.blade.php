@extends('layout.main')
@section('content')
<!-- ======================= Home Banner ======================== -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
       
       <img class="d-block w-100" src="../assets/img/xeal staffing pics.jpg"  alt="First slide">
        <!--Shelter Staffing (1).jpg-->
        
      </div>
      <div class="carousel-item">
         <img class="d-block w-100" src="../assets/img/Shelter Staffing (1).jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../assets/img/Janitorial Services (1).jpg"   alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../assets/img/GL Jobs.jpg"   alt="Fourth slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- ================================ Tag Award ================================ -->
{{-- <section class="p-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="crp_box fl_color ovr_top">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                            <a href="index.html">
                                <div class="dro_140">
                                    <div class="dro_141 de"><i class="fa fa-journal-whills"></i></div>
                                    <div class="dro_142">
                                        <h6>Find a Job</h6>
                                        <p>Looking to talk to an expert about the best solution for your workforce challenges? Just fill out some information below, and we’ll reach out to you within one business day.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                            <a href="index.html"></a>
                                <div class="dro_140">
                                    <div class="dro_141 de"><i class="fa fa-business-time"></i></div>
                                    <div class="dro_142">
                                        <h6>Find Talent</h6>
                                        <p>Progress and growth can best be achieved when a career is in motion. We’re here to help ensure your career journey aligns with your preferred workstyle and lifestyle</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</section> --}}

<!-- ======================= Job List ======================== -->
<section class="middle">
    <div class="container">
    
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-5">
                    <h2 class="ft-bold">Areas of <span class="theme-cl">Specialization</span></h2>
                </div>
            </div>
        </div>
        
        <!-- row -->
        <div class="row align-items-center">
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../assets/img/cleaners.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="cats-box-caption px-2">
                            <h4 class="fs-md mb-0 ft-medium">Janitorial Services</h4>
                            <div class="d-block mb-2 position-relative">
                                <span class="text-muted medium">
                                    <!-- <i class="lni lni-map-marker mr-1"></i> -->
                                    Xeal staffing takes care of your everyday cleaning duties and regularly keeps your workspace clean and well maintained. 
                                    We schedule your commercial janitorial services based on your needs, typically daily, weekly, or bi-weekly
                                </span>
                            </div>
                            <div class="mlb-last">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#janitor" style="background: #233d92;color:#fff;" class="btn gray ft-medium apply-btn fs-sm rounded">
                                    More<i class="lni lni-arrow-right-circle ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" tabindex="-1" id="janitor" role="dialog" data-backdrop="false">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      {{-- <h5 class="modal-title">Janitorial Services</h5> --}}
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="cats-box-caption px-2">
                                <h5 class="fs-md mb-0 ft-medium">Janitorial Services</h5>
                                <div class="d-block mb-2 position-relative">
                                    <span class="text-muted medium">
                                        We know talent better<br>
                                        Nursing<br>
                                        Companionship<br>
                                        Medication reminders<br>
                                    </span>
                                </div>

                                <h5 class="fs-md mb-0 ft-medium">Janitorial Duties</h5>
                                <div class="d-block mb-2 position-relative">
                                    <span class="text-muted medium">
                                            Restroom cleaning<br>
                                            Cleaning of employee break rooms or kitchens<br>
                                            Hard surface cleaning<br>
                                            Carpet cleaning<br>
                                            Dusting<br>
                                            Emptying trash<br>
                                            Furniture and upholstery cleaning<br>
                                            Window washing<br>
                                            Power washing<br>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../assets/img/healthCare.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="cats-box-caption px-2">
                            <h4 class="fs-md mb-0 ft-medium">Health Care Services</h4>
                            <div class="d-block mb-2 position-relative">
                                <br>
                                <span class="text-muted medium">
                                    Get the best healthcare services from well-qualified personnel that fit your healthcare needs.
                                    Xeal staffing offers a wide variety of healthcare services with customized health care plans.
                                    Health care services
                                </span>
                             
                            </div>
                            <div class="mlb-last">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#health" style="background: #233d92;color:#fff;" class="btn gray ft-medium apply-btn fs-sm rounded">
                                    More<i class="lni lni-arrow-right-circle ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal" tabindex="-1" id="health" role="dialog" data-backdrop="false">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Health Care Services</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="cats-box-caption px-2">
                                <h5 class="fs-md mb-0 ft-medium">Services</h5>
                                <div class="d-block mb-2 position-relative">
                                    <span class="text-muted medium">
                                        Home care<br>
                                        Nursing<br>
                                        Companionship<br>
                                        Medication reminders<br>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn crs_yuo12 w-auto text-white theme-bg" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../assets/img/shelterstaffing.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="cats-box-caption px-2">
                            <h4 class="fs-md mb-0 ft-medium">Shelter staffing</h4>
                            <div class="d-block mb-2 position-relative">
                                <span class="text-muted medium">
                                    Get connected to highly skilled talent to operate your shelter on a temporary or an ongoing basis. 
                                    Xeal Staffing services will vary depending on the size of the shelter, funding resources, and the assistance needed
                                </span>
                            </div>
                            <div class="mlb-last">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#shelter"style="background: #233d92;color:#fff;" class="btn gray ft-medium apply-btn fs-sm rounded">
                                    More<i class="lni lni-arrow-right-circle ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" tabindex="-1" id="shelter" role="dialog" data-backdrop="false">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      {{-- <h5 class="modal-title">Shelter staffing</h5> --}}
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="cats-box-caption px-2">
                                <h4 class="fs-md mb-0 ft-medium">Shelter staffing</h4>
                                <div class="d-block mb-2 position-relative">
                                    <span class="text-muted medium">
                                        We know talent better<br>
                                        Our talent is rigorously screened and thoroughly trained<br>
                                        We're focused on complete fit<br>
                                    </span>
                                </div>
                                <h5 class="fs-md mb-0 ft-medium">How we can help</h5>
                                <div class="d-block mb-2 position-relative">
                                    <span class="text-muted medium">
                                        Nurses<br>
                                        Managers<br>
                                        Supervisors<br>
                                        Direct caregivers<br>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                      <button type="button" class="btn crs_yuo12 w-auto text-white theme-bg" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../assets/img/generallabor.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="cats-box-caption px-2">
                            <h4 class="fs-md mb-0 ft-medium">General Labor</h4>
                            <div class="d-block mb-2 position-relative">
                                <span class="text-muted medium">
                                    Xeal staffing is an employment agency that provides a workforce that conducts various tasks to support other workers in warehouses,
                                     construction sites, and factories for clients looking for temporary talent. 
                                </span>
                            </div>
                            <div class="mlb-last">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#view" style="background: #233d92;color:#fff;" class="btn gray ft-medium apply-btn fs-sm rounded">
                                    More<i class="lni lni-arrow-right-circle ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" tabindex="-1" id="view" role="dialog" data-backdrop="false">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      {{-- <h5 class="modal-title">General Labor</h5> --}}
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                        <div class="card-body">
                            <div class="cats-box-caption px-2">
                                <h5 class="fs-md mb-0 ft-medium">Services</h5>
                                <div class="d-block mb-2 position-relative">
                                    <span class="text-muted medium">
                                        Custodian<br>
                                        Package handler<br>
                                        Packer<br>
                                        Gardner<br>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn crs_yuo12 w-auto text-white theme-bg" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
            </div> 
        </div>
        <!-- row -->
    </div>
</section>

<section class="middle gray" style="background: #233d92">
    <div class="container">
    
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-5">
                    <h6 class="mb-0" style="color: #fff">Our Reviews</h6>
                    <h2 class="ft-bold" style="color: #fff">What Our Customers Are <span style="color: #fff">Saying</span></h2>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="review-slide px-3">
                    
                    <!-- single review -->
                    <div class="single_review px-2">
                        <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                            <div class="rw-header d-flex align-items-center justify-content-start">
                                <div class="rv-110-thumb"><img src="assets/img/team-4.jpg" class="img-fluid circle" width="70" alt="" /></div>
                                <div class="rv-110-caption pl-3">
                                    <h4 class="ft-medium fs-md mb-0 lh-1">Mark</h4>
                                    <p class="p-0 m-0">Janitorial services</p>
                                </div>
                            </div>
                            <div class="rw-header d-flex mt-3">
                                <p>All the workers from Xeal staffing have been reliable and thorough in their work</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- single review -->
                    <div class="single_review px-2">
                        <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                            <div class="rw-header d-flex align-items-center justify-content-start">
                                <div class="rv-110-thumb position-relative verified-author"><img src="assets/img/team-2.jpg" class="img-fluid circle" width="70" alt="" /></div>
                                <div class="rv-110-caption pl-3">
                                    <h4 class="ft-medium fs-md mb-0 lh-1">Victoria</h4>
                                    <p class="p-0 m-0">Health Care Services</p>
                                </div>
                            </div>
                            <div class="rw-header d-flex mt-3">
                                <p>I hired a caretaker from Xeal staffing when my doctor put me on bed rest, and they helped with medical care as well as helping out with simple lighthouse keeping and cooking. </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- single review -->
                    <div class="single_review px-2">
                        <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                            <div class="rw-header d-flex align-items-center justify-content-start">
                                <div class="rv-110-thumb"><img src="assets/img/team-5.jpg" class="img-fluid circle" width="70" alt="" /></div>
                                <div class="rv-110-caption pl-3">
                                    <h4 class="ft-medium fs-md mb-0 lh-1">Shelter X. 
                                    </h4>
                                    <p class="p-0 m-0">Shelter Staffing</p>
                                </div>
                            </div>
                            <div class="rw-header d-flex mt-3">
                                <p>Our company has not had shelter staffing shortages since we started getting talent from Xeal Staffing.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- single review -->
                    <div class="single_review px-2">
                        <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                            <div class="rw-header d-flex align-items-center justify-content-start">
                                <div class="rv-110-thumb position-relative verified-author"><img src="assets/img/team-1.jpg" class="img-fluid circle" width="70" alt="" /></div>
                                <div class="rv-110-caption pl-3">
                                    <h4 class="ft-medium fs-md mb-0 lh-1"></h4>
                                    <p class="p-0 m-0">Shelter Manager</p>
                                </div>
                            </div>
                            <div class="rw-header d-flex mt-3">
                                <p>The Agency efficiently manages and schedules its workers, which helps us focus on other aspects of our Shelter. </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================= Customer Review ======================== -->

<section class="space bg-cover" style="background:#233d92 url(assets/img/landing-bg.png) no-repeat;">
    <div class="container py-5">
        
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-5">
                    <h6 class="text-light mb-0">Subscribe Now</h6>
                    <h2 class="ft-bold text-light">Get All New Job Notifications</h2>
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

@endsection