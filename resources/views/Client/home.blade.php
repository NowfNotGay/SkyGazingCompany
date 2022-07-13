<!DOCTYPE html>

<html lang="">
    <!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
    <head>
        
        <title>APTECH</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link href="img/favicon.ico" rel="icon">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('assets/layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/demo/logo.png')}}"/>
    </head>
    <body id="top" >
        <!-- Top Background Image Wrapper -->
        <div class="bgded overlay light" style="background-image: url({{asset('assets/images/demo/anh2.jpg')}});">
          
            <div class="wrapper row0">
                <div id="topbar" class="hoc clear">

                    <ul class="nospace">
                        <li>
                            <a href="index.html"><i class="fa fa-lg fa-home"></i></a>
                        </li>
                        <li>
                            <a href="#" title="Call Us"><i class="fa fa-phone"></i></a>
                        </li>
                        <li>
                            <a href="#" title="Send a Mail"><i class="fa fa-envelope-o"></i></a>
                        </li>
                        <li>
                            <a href="#" title="Login"><i class="fa fa-lg fa-sign-in"></i></a>
                        </li>
                        <li>
                            <a href="#" title="Sign Up"><i class="fa fa-lg fa-edit"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="wrapper row1" >
                <header id="header" class="hoc clear">
                  
                    <div id="logo" class="fl_left">
                        <h1><a href="index.html"><b class="fa fa-graduation-cap">APTECH</b></a></h1>
                    </div>
                    <nav id="mainav" class="fl_right">
                        <ul class="clear" >
                            <li class="active"><a href="index.html">Home</a></li>
                            <li>
                                <a class="drop" href="#">Sao</a>
                                <ul>
                                    <li><a href="">Gallery</a></li>
                                    <li><a href="">Full Width</a></li>
                                    <li><a href="">Sidebar Left</a></li>
                                    <li><a href="">Sidebar Right</a></li>
                                    <li><a href="">Basic Grid</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                  
                </header>
            </div>
          
            <div id="pageintro" class="hoc clear">
              
                <article>
                    <p>WELCOME TO F0'S PROJECT</p>
                    <h3 class="heading">SKY GAZING COMPANY</h3>
                    <footer>
                        <ul class="nospace inline pushright">
                            <li><a class="btn" href="#">Contact</a></li>
                            <li><a class="btn inverse" href="#">About</a></li>
                        </ul>
                    </footer>
                </article>
              
            </div>
          
        </div>
        <!-- End Top Background Image Wrapper -->
      
      
      
        <div class="wrapper row3">
            <main class="hoc container clear">
                <!-- main body -->
              
                {{-- <div class="sectiontitle">
                    <h5 class="heading">Praesent ex malesuada</h5>
                    <p>Quis mollis sit amet semper eget nulla cras tellus purus tincidunt</p>
                </div> --}}
                
                {{-- <div id="header_section"> --}}
                        {{-- <img id="header_section" src="{{ asset('assets/images/demo/maparea.jpg') }}" /> --}}
                {{-- </div> --}}
                <img src="{{ asset('assets/images/demo/maparea2.jpg') }}" usemap="#solarsystem" alt="" />

                <map name="solarsystem">
                    <area shape="circle" coords="100px,175px,80px" alt="Sun" href="">
                    <area shape="circle" coords="218px,170px,17px" alt="Mercury" href="">
                    <area shape="circle" coords="295px,175px,45px" alt="Venus" href="">
                    <area shape="circle" coords="390px,170px,38px" alt="Earth" href="">
                    <area shape="circle" coords="505px,175px,30px" alt="Mars" href="">
                    <area shape="circle" coords="610px,175px,52px" alt="Jupiter" href="">
                    <area shape="circle" coords="720px,175px,38px" alt="Saturn" href="">
                    <area shape="circle" coords="805px,175px,38px" alt="Uranus" href="">
                    <area shape="circle" coords="900px,175px,38px" alt="Neptune" href="">
                    <area shape="circle" coords="955px,170px,10px" alt="Pluto" href="">
                    <area shape="circle" coords="450px,170px,10px" alt="Moon" href=""> 
                </map>
                <!-- / main body -->
            </main>
        </div>

        <div class="wrapper">
            <section class="hoc container clear">
                 <div class="sectiontitle">
                    <h5 class="heading">Planets in Our Solar System</h5>
                    <p>Quis mollis sit amet semper eget nulla cras tellus purus tincidunt</p>
                </div>
                <div class="">
                    <h5 class="heading">Primary</h5>
                    <div class="container py-5">
                        <div class="row">
                            <div class="wrapper">
                                <div class="group latest">
                                    <div class="col-lg-9 pt-5 pt-lg-0">
                                        <div class="bg-primary rounded" style="height: 200px;"></div>
                                        <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="#"><img src="{{asset('assets/images/demo/Mercury.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Mercury</h5>
                                                <p>Mercury—the smallest planet in our solar system and closest to the Sun—is only slightly larger than Earth's Moon. Mercury is the fastest planet, zipping around the Sun every 88 Earth days.&hellip;</p>
                                            </div>
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="#"><img src="{{asset('assets/images/demo/Venus.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Venus</h5>
                                                <p>Venus spins slowly in the opposite direction from most planets. A thick atmosphere traps heat in a runaway greenhouse effect, making it the hottest planet in our solar system.&hellip;</p>
                                            </div>
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="#"><img src="{{asset('assets/images/demo/Earth.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Earth</h5>
                                                <p>Earth—our home planet—is the only place we know of so far that’s inhabited by living things. It's also the only planet in our solar system with liquid water on the surface.&hellip;</p>
                                            </div>
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="#"><img src="{{asset('assets/images/demo/Mars.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Mars</h5>
                                                <p>Mars is a dusty, cold, desert world with a very thin atmosphere. There is strong evidence Mars was – billions of years ago – wetter and warmer, with a thicker atmosphere.&hellip;</p>
                                            </div>
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="#"><img src="{{asset('assets/images/demo/Jupiter.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Jupiter</h5>
                                                <p>Jupiter is more than twice as massive than the other planets of our solar system combined. The giant planet's Great Red spot is a centuries-old storm bigger than Earth.&hellip;</p>
                                            </div>
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="#"><img src="{{asset('assets/images/demo/Saturn.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Saturn</h5>
                                                <p>Adorned with a dazzling, complex system of icy rings, Saturn is unique in our solar system. The other giant planets have rings, but none are as spectacular as Saturn's.&hellip;</p>
                                            </div>
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="#"><img src="{{asset('assets/images/demo/Uranus.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Uranus</h5>
                                                <p>Uranus—seventh planet from the Sun—rotates at a nearly 90-degree angle from the plane of its orbit. This unique tilt makes Uranus appear to spin on its side.&hellip;</p>
                                            </div>
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="#"><img src="{{asset('assets/images/demo/Neptune.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Neptune</h5>
                                                <p>Neptune—the eighth and most distant major planet orbiting our Sun—is dark, cold and whipped by supersonic winds. It was the first planet located through mathematical calculations.&hellip;</p>
                                            </div>
                                            {{-- <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="#"><img src="{{asset('assets/images/demo/Pluto.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Pluto</h5>
                                                <p>Pluto is a complex world of ice mountains and frozen plains. Once considered the ninth planet, Pluto is the best known of a new class of worlds called dwarf planets.&hellip;</p>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                    <h5 class="heading">Dwarf</h5>
                
                <div class="group latest">
                    <article class="one_third first"><a href="#"><img src="{{asset('assets/images/demo/Pluto.jpg')}}" alt=""></a>
                      <h6 class="heading font-x1">Pluto</h6>
                      <p>Pluto is a complex world of ice mountains and frozen plains. Once considered the ninth planet, Pluto is the best known of a new class of worlds called dwarf planets.</p>
                      <footer><a href="#">Read More</a></footer>
                    </article>

                    <article class="one_third"><a href="#"><img src="{{asset('assets/images/demo/Ceres.jpg')}}" alt=""></a>
                      <h6 class="heading font-x1">Ceres</h6>
                      <p>Ceres makes up almost a third of the asteroid belt's total mass, but it is still far smaller than Earth's Moon. Ceres is heavily cratered with large amounts of ice underground.</p>
                      <footer><a href="#">Read More</a></footer>
                    </article>

                    <article class="one_third"><a href="#"><img src="{{asset('assets/images/demo/Makemake.jpg')}}" alt=""></a>
                      <h6 class="heading font-x1">Makemake</h6>
                      <p>It takes 310 Earth years for Makemake to complete one orbit around our Sun.</p>
                      <footer><a href="#">Read More</a></footer>
                    </article>
                </div>
               
                <div class="group latest">
                    <article class="one_third first"><a href="#"><img src="{{asset('assets/images/demo/Haumea.jpg')}}" alt=""></a>
                      <h6 class="heading font-x1">Haumea</h6>
                      <p>Haumea is one of the fastest rotating large objects in our solar system.</p>
                      <footer><a href="#">Read More</a></footer>
                    </article>

                    <article class="one_third"><a href="#"><img src="{{asset('assets/images/demo/Eris.jpg')}}" alt=""></a>
                      <h6 class="heading font-x1">Eris</h6>
                      <p>Eris is one of the largest known dwarf planets in our solar system. It's about the same size as Pluto, but it is three times farther from the Sun. One orbit takes about 557 years.</p>
                      <footer><a href="#">Read More</a></footer>
                    </article>

                </div>
            </section>
        </div>
        <div class="wrapper row4">
            <footer id="footer" class="hoc clear">
               
                <article class="one_quarter first">
                    <h5 class="heading">Dui elit donec rutrum</h5>
                    <p>Maximus proin blandit id est ac viverra maecenas sed neque tellus nunc at nulla et sem consectetur iaculis sed sollicitudin praesent.</p>
                    <p>Dictum efficitur massa at suscipit nullam nec eros suscipit malesuada libero et&hellip;</p>
                    <p class="nospace"><a href="#">Read More</a></p>
                </article>
                <div class="one_quarter">
                    <h5 class="heading">Facilisis lectus</h5>
                    <ul class="nospace btmspace-30 linklist contact">
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <address>
                                Street Name &amp; Number, Town, Postcode/Zip
                            </address>
                        </li>
                        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
                        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
                    </ul>
                    <ul class="faico clear">
                        <li>
                            <a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="one_quarter">
                    <h5 class="heading">Posuere cubilia curae</h5>
                    <ul class="nospace linklist">
                        <li><a href="#">In lacinia tincidunt</a></li>
                        <li><a href="#">Ultrices quisque gravida</a></li>
                        <li><a href="#">Risus vitae dapibus</a></li>
                        <li><a href="#">Iaculis urna mi</a></li>
                        <li><a href="#">Ullamcorper libero</a></li>
                    </ul>
                </div>
                <div class="one_quarter">
                    <h5 class="heading">Sed consequat augue</h5>
                    <ul class="nospace linklist">
                        <li><a href="#">In tristique est quam</a></li>
                        <li><a href="#">Ac augue vestibulum</a></li>
                        <li><a href="#">Ante ipsum primis</a></li>
                        <li><a href="#">In faucibus orci</a></li>
                        <li><a href="#">Luctus et ultrices</a></li>
                    </ul>
                </div>
            </footer>
        </div>

        <div class="sdb_holder them">
            <address>
                <ul class="faico clear">
                    <li>
                        <a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a>
                    </li><br/>
                    <li>
                        <a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a>
                    </li><br/>
                    <li>
                        <a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a>
                    </li><br/>
                    <li>
                        <a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </address>
        </div>

        <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
        <!-- JAVASCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> --}}
    
        <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    
        <script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    
        <!-- Contact Javascript File -->
        <script src="{{asset('assets/mail/jqBootstrapValidation.min.js')}}"></script>
        {{-- <script src="{{asset('assets/mail/contact.js')}}"></script> --}}
    
        <!-- Template Javascript -->
        <script src="{{asset('assets/js/mainclient.js')}}"></script>
        <script src="{{asset('assets/layout/scripts/jquery.min.js')}}"></script>
        <script src="{{asset('assets/layout/scripts/jquery.backtotop.js')}}"></script>
        <script src="{{asset('assetslayout/scripts/jquery.mobilemenu.js/')}}"></script>
        <script type="text/javascript" src="{{asset('assets/main.70a66962.js')}}"></script>
        
    </body>
</html>


