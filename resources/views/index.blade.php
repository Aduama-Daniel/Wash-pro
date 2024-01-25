<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wash Pro</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('/img/logo3.jpg')}}" rel="icon" >


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn color-change" data-wow-delay="0.1s" id="navToggle">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt text-primary me-2"></i>Accra, Ghana</small>
                <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>Pickups : Fridays</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope text-primary me-2"></i>info@example.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i>+233 55 949 1318</small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s" >
            <a href="#home" class="navbar-brand ms-4 ms-lg-0">
                <img src="{{ asset('/img/logo1.png')}}" alt="" class="img-fluid" width = "80">
                
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link" >About</a>
                    <a href="#service" class="nav-item nav-link">Services</a>
                    <a href="#package" class="nav-item nav-link">Packages</a>
                    
                    <a href="#home" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://www.instagram.com/washpro360?igsh=YzVkODRmOTdmMw==">
                        <small class="fab fa-instagram text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://x.com/washpro360?s=21&t=0awGUMtff_NaD8pWQtdbqw">
                        <small class="fab fa-twitter text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://t.snapchat.com/DuPvjPbI">
                        <small class="fab fa-snapchat text-primary"></small>
                        
                    </a>

                    
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s" id = "home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/background1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    
                                    <h1 class="display-1 mb-4 animated slideInDown">Your 360 cleaning service</h1>
                                    <a href="http://wa.me/+233559491318" class="btn btn-primary py-3 px-5 animated slideInDown">Talk to Us <i class="fab fa-whatsapp"></i></a></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/background3.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                   
                                    <h1 class="display-1 mb-4 animated slideInDown">Let us do the cleaning while you relax</h1>
                                    <a href="http://wa.me/+233559491318" class="btn btn-primary py-3 px-5 animated slideInDown">Talk to Us <i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5 about-section" id = "about">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="img/about1.jpg">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                   
                    <h1 class="display-5 mb-4">About Us</h1>
                    <p class="mb-4">

At Wash Pro, we're dedicated to delivering top-notch laundry & cleaning solutions tailored to meet your needs. Our mission is simple: to provide comprehensive cleaning services that leave your laundry and spaces immaculate. With a commitment to detail and customer satisfaction, we aim to redefine cleanliness, ensuring every nook and corner sparkles. Trust us to bring a 360-degree approach to cleanliness, offering thorough, efficient, and reliable service you can count on</p>
                   
                </div>
            </div>
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">How it Works</p>
            <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100" id="works-box">

                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-phone text-white"></i>
                                </div>
                                
                                <div class="ps-3">
                                    <h4>Place Your Order</h4>
                                    
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="h-100" id="works-box">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-car text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>We pickup</h4>
                                    
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="h-100" id="works-box">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-tshirt text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>We wash, iron, fold</h4>
                                    
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 " id="works-box">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-truck text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>We Deliver</h4>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    


    


    <!-- Service Start -->
    <div class="container-xxl service py-5" id = "service">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Services</p>
                <h1 class="display-5 mb-5">Awesome Services and Pricing</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Laundry </h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Sneaker Cleaning </h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Dry Cleaning</h5>
                        </button>
                        
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Office cleaning</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-5" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Carpet/upholstery cleaning</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-6" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Post construction cleaning</h5>
                        </button>
                        
                        
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/laundryM.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Wash, Dry, Fold, Iron</h3>
                                    <p class="mb-4">Relax while we take care of your laundry needs. Our service includes convenient pickup of your dirty laundry, thorough washing, drying, expert folding, and precise ironing. Your freshly cleaned and neatly packaged clothes will be delivered back to you hassle-free, ensuring a seamless and enjoyable laundry experience</p>
                                   
                                    <a href="http://wa.me/+233559491318" class="btn btn-primary py-3 px-5 mt-3">Book Us <i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/newsneaker.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Our Sneaker Cleaning Services</h3>
                                    <p class="mb-4">We specialize in reviving your sneakers with our premium Sneaker Cleaning Services. From thorough cleaning to meticulous detailing, trust us to bring back the freshness and style to your favorite pairs, ensuring they look as good as new</p>
                                    
                                    <a href="http://wa.me/+233559491318" class="btn btn-primary py-3 px-5 mt-3">Book Us <i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100"> 
                                        <img class="position-absolute rounded w-100 h-100" src="img/dryc.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Our Dry Cleaning Services</h3>
                                    <p class="mb-4">Discover the excellence of our Dry Cleaning Services. We specialize in meticulous fabric care, ensuring your garments receive the utmost attention and care. From delicate fabrics to everyday wear, trust us to deliver a fresh and professionally cleaned wardrobe tailored to your lifestyle</p>
                                    
                                    <a href="http://wa.me/+233559491318" class="btn btn-primary py-3 px-5 mt-3">Book Us <i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-5">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/newcarpet.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Carpet/Upholstery cleaning</h3>
                                    <p class="mb-4">Transform your living spaces with our expert Carpet and Upholstery Cleaning services. Our team excels in deep cleaning, ensuring a rejuvenated and refreshed look for your carpets and upholstery. Say goodbye to stains and dirt, and welcome a cleaner, cozier home or office environment.</p>
                                    
                                    <a href="http://wa.me/+233559491318" class="btn btn-primary py-3 px-5 mt-3">Book Us <i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-6">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/Construction.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Post construction cleaning</h3>
                                    <p class="mb-4">Experience a spotless finish to your construction project with our Post-Construction Cleaning services. Our team is dedicated to removing debris, dust, and any remnants of construction, leaving your space ready to shine. Enjoy the unveiling of your newly constructed area with a thorough and professional clean-up.</p>
                                    
                                    <a href="http://wa.me/+233559491318" class="btn btn-primary py-3 px-5 mt-3">Book Us <i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/OfficeClean.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Our Office Cleaning Services</h3>
                                    <p class="mb-4">Experience top-notch Office Cleaning Services tailored to elevate your workspace. Our dedicated team meticulously handles dusting, sanitizing, and waste disposal to ensure a pristine and organized office environment. Enjoy a clean, refreshing workspace that promotes productivity and leaves a lasting positive impression</p>
                                   
                                    <a href="http://wa.me/+233559491318" class="btn btn-primary py-3 px-5 mt-3">Book Us <i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    


    <!-- Projects Start -->
    <div class="container-xxl py-5" id = "package">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Packages</p>
                <h1 class="display-5 mb-5">We Have Affordable Packages That fits Everyone</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/student.jpg" alt="">
                        <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Student Package</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/family.jpg" alt="">
                        <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Family Package</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/family.jpeg" alt="">
                        <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">All Round Package</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/service-4.jpg" alt="">
                        <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Only This Week Package</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


   


    <!-- Testimonial Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Testimonial</p>
                <h1 class="display-5 mb-5">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-1.jpg" alt="">
                    <h4>Client Name</h4>
                    <span>Profession</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-2.jpg" alt="">
                    <h4>Client Name</h4>
                    <span>Profession</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-3.jpg" alt="">
                    <h4>Client Name</h4>
                    <span>Profession</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-4.jpg" alt="">
                    <h4>Client Name</h4>
                    <span>Profession</span>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Socials</h4>
                   
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://x.com/washpro360?s=21&t=0awGUMtff_NaD8pWQtdbqw"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.instagram.com/washpro360?igsh=YzVkODRmOTdmMw=="><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://t.snapchat.com/DuPvjPbI"><i class="fab fa-snapchat"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="http://wa.me/+233559491318"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    <br>
                    <h5 class="text-white mb-4">@washpro360</h5>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Services</h4>
                    <a class="btn btn-link" href="#service">Laundry</a>
                    <a class="btn btn-link" href="#service">Dry Cleaning</a>
                    <a class="btn btn-link" href="#service">Office Cleaning</a>
                    <a class="btn btn-link" href="#service">Sneaker Cleaning</a>
                    <a class="btn btn-link" href="#service">Post Construction Cleaning</a>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Phone</h4>
                    <a class="btn btn-link" href="#">+233 204 238 723</a>
                    <a class="btn btn-link" href="#">+233 55 949 1318</a>
                    
                </div>
               
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Wash Pro</a>, All Right Reserved.
                </div>
               
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('.nav-item').on('click',function() {
            // Remove 'active' class from all items
            $('.nav-item').removeClass('active');
            //console.log("Removed");
            // Add 'active' class to the clicked item
            $(this).addClass('active');
            //console.log("Added");
        });
    });
</script>

<!--
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var navLinks = document.querySelectorAll('.nav-item');

        navLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                // Remove 'active' class from all items
                navLinks.forEach(function(navLink) {
                    navLink.classList.remove('active');
                    console.log("Removed");
                });

                // Add 'active' class to the clicked item
                link.classList.add('active');
                console.log("Added");
            });
        });
    });
</script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>