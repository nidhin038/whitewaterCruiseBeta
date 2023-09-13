<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>White Water Cruise - Unique of its kind</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <?php include_once("includes/constants.php"); ?>


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>


<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>info@whitewatercruise.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+91 9447112255</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="https://www.facebook.com/whitewatercruise">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <!-- <a class="text-primary px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a> -->
                        <!-- <a class="text-primary px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a> -->
                        <a class="text-primary px-3" href="https://www.instagram.com/whitewater_cruise/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="https://www.google.com/search?q=whitewater+cruise">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5 menu-container">
                <a href="" class="navbar-brand" style="width:200px;">
                    <span class="m-0 text-primary font-bold"><span class="text-dark">WHITE WATER </span>CRUISE</span>
                    <img src="img/White-Water-Cruise-Logo.png" width="35%" style="margin:0px 0 10px 0"/>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown" >
                            <a href="#" onclick="smoothScroll('container-packages')"   class="nav-item nav-link ">Packages</a>
                            
                        </div>
                        <a href="<?php echo BASE_URL;?>reservations" class="nav-item nav-link">Reservations</a>
                        <a href="<?php echo BASE_URL;?>gallery" class="nav-item nav-link">Gallery</a>
                        <a href="<?php echo BASE_URL;?>about-us" class="nav-item nav-link">About Us</a>
                        <a href="<?php echo BASE_URL;?>about-alleppey" class="nav-item nav-link">About Alleppey</a>
                        <a href="<?php echo BASE_URL;?>contact-us" class="nav-item nav-link">Contact Us</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Let's Explore The BackWaters Together</h1>
                            <a onclick="smoothScroll('callback-container')" class="btn btn-primary py-md-3 px-md-5 mt-2">Book a Call back</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Let's Explore The BackWaters Together</h1>
                            <a onclick="smoothScroll('callback-container')" class="btn btn-primary py-md-3 px-md-5 mt-2">Book a Call back</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">We Provide Best Kerala Packages In Your Budget</h1>
                        <p>White Water Cruise, one of Alappuzha's most popular houseboat service providers, offers you an unforgettable and delightful vacation within your budget</p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-2.jpg" alt="">
                            </div>
                        </div>
                        <a href="" class="btn btn-primary mt-1">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Competitive Pricing</h5>
                            <p class="m-0">Our pricing is designed to be fair and reflective of the quality of service, comfort, and unique experience we offer on our boat house.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Best Services</h5>
                            <p class="m-0">Our team is dedicated to ensuring that every aspect of your stay is comfortable, enjoyable, and memorable.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Premium Facilities</h5>
                            <p class="m-0">We offer a range of premium facilities to enhance your experience. Luxurious Cabins, Private Deck Space, Personalized Service, Fine Dining are few of them.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div id="container-packages" class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Explore Top Packages</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/houseboatPackage.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="packages\house-boat\">
                            <h5 class="text-white">House Boat Packages</h5>
                            <span>Exclusive Back Water Packages</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/keralaPackage.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="packages\kerala-packages\">
                            <h5 class="text-white">Kerala Packages</h5>
                            <span>Back waters plus Top Kerala spots</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/honeymoon.jpg" alt="">
                        
                        <a class="destination-overlay text-white text-decoration-none" href="packages\honey-moon\">
                            <h5 class="text-white">Honeymoon Packages</h5>
                            <span>Customized packages</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Packages End -->


    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
                <h1>Tours & Travel Services</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">Travel Guide</h5>
                        <p class="m-0">Our boat house team is dedicated to ensuring that you have all the information you need to explore the region to its fullest</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-car-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Pick up / Drop off</h5>
                        <p class="m-0">We offer pickup services from airport, railway station or any other place to ensure a smooth and convenient start to your journey with us.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Hotel Booking</h5>
                        <p class="m-0">We understand that your journey might involve other stays as well. We can assist you in booking hotels across Kerala.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" id="callback-container" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Mega Offer</h6>
                        <h1 class="text-white"><span class="text-primary">30% OFF</span> For Houseboat packages</h1>
                    </div>
                    <p class="text-white">We do offer various promotions and discounts from time to time to provide added value to our guests. A discount of upto 30% is provided to customers on non peak seasons.
                    To find out about the latest discounts and promotions we have available, please feel free to reach out to our booking team directly. 
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Book a Callback</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Phone" required="required" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control p-4" placeholder="Message (Optional)"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->



    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
                <h1>What Say Our Customers</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="img/cust1.PNG" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Very helpful OWNER. nice and very clean boat. When I was  on board, I recognized that I forgot my mobile in the car. The owner used his car and brought me the mobile.The captain had a chilled beer for me!
Nice crew. Nice relaxing boat trip.
                        </p>
                        <h5 class="text-truncate">Torsten Schleicher</h5>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/cust6.PNG" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Overall Service, Food and Service were excellent..
Crew Members Jijo and Manu were extremely superb.. Best option to bring your family as there is no doubt about the quality and safety 👍
                        </p>
                        <h5 class="text-truncate">Ashok Umapathy</h5>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/cust3.PNG" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5 review-container">I got introduced to White water cruise and Mr. Hari through my friend who have visited Kerala nearly a decade ago. I connected with him, and loaded Mr Hari with millions of queries including booking process. He was patient enough to clarify every minute detail and thus we booked the houseboat.

We had booked an exclusive houseboat for 1 day. He along with his staff came to receive us till the car point and carried all our luggage till the entry point(there were heavy ones as we were on a long vacay). Mr Jijo drove us while Mr Mannu cooked and served us authentic Kerala delicacies. The houseboat is top-notch, well maintained and will all facilities needed for a comfortable stay. Their hospitality, polite behaviour and enthusiastic service are par excellence. All the meals were cooked fresh, tasted delicious and served on time…actually they over-fed and pampered us like home. Our pilot explored the backwaters and lake and guided us about the area. Kerala backwaters is exotic but White Water Cruise and all their staff (Mr Hari, Mr Jijo and Mr Mannu) made our stay delightful, exciting and super comfortable. Even my little son felt cosy. It was nothing less than a luxury stay…which also felt like home. If you are planning for a houseboat stay….don’t give any second thoughts about White Water Cruise. They are superb and the champion.
                        </p>
                        <h5 class="text-truncate">Sukanya Sen</h5>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/cust4.PNG" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Awesome experience with the white water cruise. Special thanks to captain Mr. @jijo for a wonderful ride and 🧑‍🍳 Mr. manu for the tasty food. It was such a wonderful experience with the @whitewater. I recommended to everyone at least visit once.
                        </p>
                        <h5 class="text-truncate">Sanjay Rathod</h5>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/cust5.PNG" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">The entire stay was pleasant. The boat house was very clean and food was very tasty. We could inform our preferred food to be served. Thank you.
                        </p>
                        <h5 class="text-truncate">Ashwin L Rao</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">WHITE WATER </span>CRUISE</h1>
                </a>
                <p>Unique of its kind</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <!-- <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a> -->
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://www.facebook.com/whitewatercruise"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://www.google.com/search?q=whitewater+cruise"><i class="fab fa-google"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/whitewater_cruise/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <!-- <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                </div> -->
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Menu</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Reservation</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Gallery</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Alleppey</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>AMC/XXXXIV/937, Avalukunnu Post, Alappuzha, Kerala </p>
                <p><i class="fa fa-phone-alt mr-2"></i>+91 9447112255</p>
                <p><i class="fa fa-envelope mr-2"></i>info@whitewatercruise.com</p>
                <!-- <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="">White Water Cruise</a>. All Rights Reserved.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <!-- <p class="m-0 text-white-50">Designed by <a href="https://htmlcodex.com">HTML Codex</a> -->
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="" onclick="smoothScroll('')" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<script>
function smoothScroll(id){
    document.querySelector('#'+id).scrollIntoView({
        behavior: 'smooth'
    });
}
</script>