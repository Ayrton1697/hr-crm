<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>HR CRM</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3e89adbc58.js" crossorigin="anonymous"></script> <!--Font awesome iconos -->
    <link href="{{asset('css/swiper.css')}}" rel="stylesheet">
	<link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{asset('css/styles.css')}}" rel="stylesheet">
	<link href="{{asset('css/app.css')}}" rel="stylesheet">

       <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@700;800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- END FONT -->

	<!-- Full calendar-->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    
    <!-- Favicon  -->
    <link rel="icon" href="{{asset('images/new-logo.png')}}">
    @livewireStyles
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Safari Group</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="{{route('index')}}"><img src="{{App::getLocale()=='en' ? asset('images/logo/Logo-Safari-Group-ingles.png') : (App::getLocale()=='es' ? asset('images/logo/logo c gris 2.png') : null)}}" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('JobPostings')}}">Active searches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('index')}}#services">Services</a>
                </li>

                <!-- Dropdown Menu -->          
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">Terms Conditions</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Privacy Policy</span></a>
                    </div>
                </li> -->
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('index')}}#contact">Contact</a>
                </li>
            </ul>
            <!-- <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span> -->
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{App::getLocale()}}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <a href="{{route('setLanguage',['lang' => 'es'])}}" class="dropdown-item" type="button"> <span class="flag-icon flag-icon-ar flag-icon-squared"></span> Español</a>
                  <a href="{{route('setLanguage',['lang' => 'en'])}}" class="dropdown-item" type="button"><span class="flag-icon flag-icon-us flag-icon-squared"></span> English</a>
                
                </div>
            </div>
        </div>
    </nav>
     <!-- end of navbar -->
    <!-- end of navigation -->

    @yield('content')


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
      
                <div class="col-md-12 text-center">
                    <div class="footer-col">
                        <h4 class="footer-h4">
                        @if( Session::get('lang') == 'es')
                            Conectemos!
                        @else
                            Lets connect!
                        @endif
                        </h4>
                        <span class="fa-stack">
                            <a href="https://www.linkedin.com/company/safarigrouphr/" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://join.skype.com/invite/KJpXLItKOfvb" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-skype fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/safarigrouphr/" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->

    	
    <!-- Scripts -->
    <script src="{{asset('js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{asset('js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="{{asset('js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{asset('js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{asset('js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{asset('js/scripts.js')}}"></script> <!-- Custom scripts -->
    <script src="{{asset('js/calendar.js')}}"></script> <!-- Custom scripts -->
    
    @livewireScripts
    <wireui:scripts />
    <script src="//unpkg.com/alpinejs" defer></script>
   
   
    
</body>
</html>