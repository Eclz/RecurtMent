<div class="header header-light dark-text">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="/">
                    <img src="../assets/img/logo.png" class="logo" alt="" />
                </a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#login" class="theme-cl fs-lg">
                            <i class="lni lni-user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#login" class="crs_yuo12 w-auto text-white theme-bg">
                            <span class="embos_45"><i class="fas fa-plus-circle mr-1 mr-1"></i>Post Job</span>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                <ul class="nav-menu">
                
                    <li>
                        <a href="/">Home</a>
                    </li>
                    
                    <li>
                        <a href="/about-us">About Us</a>
                    </li>
                    
                    <li>
                        <a href="/contact">Contact Us</a>
                    </li>			
                </ul>

                @if(request()->is('/'))
                    <ul class="nav-menu nav-menu-social align-to-right">
                        <li>
                            <a href="#" data-toggle="modal" data-target="#login" class="ft-medium">
                                <i class="lni lni-user mr-2"></i>Find Talent
                            </a>
                        </li>
                        <li class="add-listing theme-bg">
                            <a href="/application" >
                                <i class="lni lni-circle-plus mr-1"></i>Find Job
                            </a>
                        </li>
                    </ul>
                @endif    
            </div>
        </nav>
    </div>
</div>
<!-- End Navigation -->