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
    <title>Safari Group</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('css/swiper.css')}}" rel="stylesheet">
	<link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{asset('css/styles.css')}}" rel="stylesheet">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@700;800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- END FONT -->

    <script src="https://kit.fontawesome.com/3e89adbc58.js" crossorigin="anonymous"></script> <!--Font awesome iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
	<!-- Favicon  -->
    <link rel="icon" href="{{asset('images/safari_favicon.jpg')}}">
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
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top top-nav-collapse">
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
                    <a class="nav-link page-scroll" href="#header">{{__('Home')}} <span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('job_postings')}}">{{__('Active Openings')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">{{__('Services')}}</a>
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
                    <a class="nav-link page-scroll" href="#contact">{{__('Contact')}}</a>
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
                  <a href="{{route('setLanguageFirst',['lang' => 'es'])}}" class="dropdown-item" type="button"> <span class="flag-icon flag-icon-ar flag-icon-squared"></span> Español</a>
                  <a href="{{route('setLanguageFirst',['lang' => 'en'])}}" class="dropdown-item" type="button"><span class="flag-icon flag-icon-us flag-icon-squared"></span> English</a>
                
                </div>
            </div>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row row__header">
                   
                    <div class="col-lg-12 header__image" style="z-index: 10;">
                       <!-- <img src="images/logo/logo c gris 2.png"> -->
                        <img src="{{App::getLocale()=='en' ? asset('images/logo/Logo-Safari-Group-ingles.png') : (App::getLocale()=='es' ? asset('images/logo/Group 7.png') : null)}}">
                        <div class="text-container text-center">
                            <p class="intro_text">{!! __('intro text') !!}</p>
                            <!-- <a class="btn-solid-lg page-scroll" href="#services">{{__('DISCOVER')}}</a> -->
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                   
             
                </div> <!-- end of row -->
  <!--               <div class="row">
                    <div class="col-lg-12" >
                        <div class="text-container text-center">
                            <p class="" style="margin-top: -2rem;">Las personas son el pilar más importante de cualquier organización.  
                                Encontremos y potenciemos juntos a quienes <br> serán parte de tu equipo.</p>
                            <a class="btn-solid-lg page-scroll" href="#services">DISCOVER</a>
                        </div> 
                    </div> 
                </div> -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


  
    <!-- Details 1 -->
    <div class="cards-1" id="nosotros">
        <div class="container container-us-text">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="mb-5">{{__('Us')}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-heading">
                        <p class="us-text">{!!__('Us text')!!}</p>
                        <a href="https://www.linkedin.com/in/jesicalogioco-safarigrouphr" target="_blank" class="btn-solid-reg" >{{__('Us button')}}</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <!-- <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-1-office-worker.svg" alt="alternative">
                    </div> 
                  
                </div> -->
                 <!-- end of col -->
            </div> <!-- end of row -->
    
<!--         
            <div class="row mt-5">
                <div class="col-lg-6">
                 <img src="{{asset('images/nosotros-iconos/lealtad-color.png')}}" class="card-image">
                  <h2 class="mb-5 us-icon">{{__('Loyalty')}}</h2>
                </div>
               <div class="col-lg-6">
                  <img src="{{asset('images/nosotros-iconos/responsabilidad-color.png')}}" class="card-image">
                  <h2 class="mb-5 us-icon">{{__('Accountability')}}</h2>
                </div>
            </div> -->
       
  
           </div> 
    </div> <!-- end of basic-1 -->
 


    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="mb-5">{{__('Services')}}</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card__container">                  
                                <img src="{{asset('images/Busquedas-it.png')}}"  class="card-image fa-solid fa-user-group"></i>
                            <!--<svg class="card-image">
                                <use xlink:href="file:///D:/wamp64/www/safari_group/safari-boceto-2/images/svg/sprite.svg#icon-world"></use>
                            </svg> -->
                        
                            <div class="card-body">
                                <h4 class="card-title">{{__('IT global search and recruiting')}}</h4>
                                <p>{!!__('Services text 1')!!}</p>
                                <!-- <div class="card-body__list">
                                    <ul class="text-left">
                                    {!!__('Services list 1')!!}
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card__container">
                         <img src="{{asset('images/desarrollo-personal-y-de-equipos.png')}}" class="card-image fa-solid fa-user-group"></i>              
                       <!--      <svg class="card-image">
                                <use xlink:href="{{asset('images/svg/sprite.svg#icon-world')}}"></use>
                          </svg> -->
                        <div class="card-body">
                            <h4 class="card-title">{{__('Personal and team development')}}</h4>
                            <p>{!!__('Services text 2')!!}</p>
                                <!-- <div class="card-body__list">
                                    <ul class="text-left">
                                    {!!__('Services list 2')!!}
                                    </ul>
                                </div> -->
                        </div>
                    </div>
                 </div>
                    <!-- end of card -->

                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->
	<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="{{asset('images/details-lightbox-1.svg')}}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Design And Plan</h3>
                    <hr>
                    <h5>Core feature</h5>
                    <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                    <p>Do you need to build lists for your email campaigns? It just got easier with Safari Group.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">List building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Easy database browsing</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">User administration</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Automate user signup</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Quick formatting tools</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Fast email checking</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#request">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->

    <!-- Details Lightbox 2 -->
	<div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="{{asset('images/details-lightbox-2.svg')}}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Search To Optimize</h3>
                    <hr>
                    <h5>Core feature</h5>
                    <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                    <p>Do you need to build lists for your email campaigns? It just got easier with Safari Group.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">List building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Easy database browsing</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">User administration</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Automate user signup</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Quick formatting tools</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Fast email checking</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#request">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 2 -->
    <!-- end of details lightboxes -->



    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="mb-5 text-center">{{__('Let´s talk!')}}</h1>
                    <ul class="list-unstyled li-space-lg">
                      <!--   <li class="address">Don't hesitate to give us a call or send us a contact form message</li>
                        <li><i class="fas fa-map-marker-alt"></i>22 Innovative Area, San Francisco, CA 94043, US</li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:003024630820">+81 720 2212</a></li> -->
                        <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:jesicalogioco@safari-group.com">info@safari-group.com</a></li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="#">+5491131221328</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100939.98555098464!2d-122.507640204439!3d37.757814996609724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sro!4v1498231462606" allowfullscreen></iframe>
                    </div> -->
                    <div class="text-center mb-5">
                                   
                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">{{('Name')}}</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">{{__('Your message')}}</label>
                            <div class="help-block with-errors"></div>
                        </div>
                
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">{{__('SUBMIT MESSAGE')}}</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->
               
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-12">
                    <div class="text-center mt-5">
                        <img class="map-img" src="{{asset('images/origami-map.png')}}" alt="">
                    </div>
           
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
      
                <div class="col-md-12 text-center">
                    <div class="footer-col">
                        <h4>{{__('Social Media')}}</h4>
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
    <script src="https://kit.fontawesome.com/3e89adbc58.js" crossorigin="anonymous"></script> <!--Font awesome iconos -->
</body>
</html>