 <header id="header" class="tra-menu navbar-dark white-scroll">
     <div class="header-wrapper">
         <!-- MOBILE HEADER -->
         <div class="wsmobileheader clearfix">
             <span class="smllogo">
                 <img src="{{ asset('front/images/logo/logo.png') }}" alt="mobile-logo" width="175" />
             </span>
             <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
         </div>
         <!-- NAVIGATION MENU -->
         <div class="wsmainfull menu clearfix">
             <div class="wsmainwp clearfix">
                 <div class="d-flex align-items-center justify-content-between">
                     <!-- HEADER BLACK LOGO -->
                     <div>
                         <div class="desktoplogo">
                             <a href="{{ route('front.home') }}" class="logo-black">
                                 <img src="{{ asset('front/images/logo/logo.png') }}"
                                     alt="{{ config('constant.APP_NAME') }}" width="175" />
                             </a>
                         </div>
                         <!-- HEADER WHITE LOGO -->
                         <div class="desktoplogo">
                             <a href="{{ route('front.home') }}" class="logo-white">
                                 <img src="{{ asset('front/images/logo/logo-w.png') }}"
                                     alt="{{ config('constant.APP_NAME') }}" width="175" />
                             </a>
                         </div>
                     </div>
                     <!-- MAIN MENU -->
                     <div>
                         <nav class="wsmenu header-top clearfix">
                             <ul class="wsmenu-list nav-theme">
                                 <li class="nl-simple" aria-haspopup="true">
                                     <a href="{{ route('front.home') }}" class="h-link active">Home</a>
                                 </li>
                                 <li class="nl-simple" aria-haspopup="true">
                                     <a href="{{ route('front.home') }}#about" class="h-link">About</a>
                                 </li>
                                 <li class="nl-simple" aria-haspopup="true">
                                     <a href="{{ route('front.home') }}#features-2" class="h-link">Why Choose Us</a>
                                 </li>
                                 <li class="nl-simple" aria-haspopup="true">
                                     <a href="{{ route('front.home') }}#products" class="h-link">Products</a>
                                 </li>
                                 <li class="nl-simple" aria-haspopup="true">
                                     <a href="{{ route('front.home') }}#features-3" class="h-link">How it works</a>
                                 </li>
                                 <li class="nl-simple" aria-haspopup="true">
                                     <a href="#contact" class="h-link">Contact</a>
                                 </li>
                                 <li class="nl-simple" aria-haspopup="true">
                                     <a href="{{ route('customer.login') }}" class="h-link">Login</a>
                                 </li>
                                 <li class="nl-simple d-lg-none d-block mt-2" aria-haspopup="true">
                                     <a href="{{ route('self.apply.main') }}" class="custom-btn mb-md-0 mb-10"> <span
                                             class="custom-btn-text text-black">Self Apply</span>
                                         <span class="custom-btn-icon">
                                             <i class="fas fa-arrow-up"></i>
                                         </span></a>
                                 </li>
                             </ul>
                         </nav>
                     </div>
                     <div>
                         <nav class="wsmenu ">
                             <ul class="d-flex align-items-center">
                                 <li class="nl-simple me-2  d-lg-block d-none" aria-haspopup="true">
                                     <a href="{{ route('self.apply.main') }}" class="custom-btn custom-btn-wrap"> <span
                                             class="custom-btn-text text-black  d-lg-block d-none">Self Apply</span>
                                         <span class="custom-btn-icon">
                                             <i class="fas fa-arrow-up"></i>
                                         </span></a>
                                 </li>
                             </ul>
                         </nav>

                     </div>
                     <!-- END MAIN MENU -->
                 </div>
             </div>
         </div>
         <!-- END NAVIGATION MENU -->
     </div>
     <!-- End header-wrapper -->
 </header>
