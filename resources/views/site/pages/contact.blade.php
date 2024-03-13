@extends('site.index')
@section('titre', 'Contact')
@section('content')
    <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contact Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-organic-farm.html">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Contact Info Area
==============================-->
<div class="space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-7">
                <div class="title-area text-center">
                    <h2 class="sec-title">Contact Information</h2>
                    <p class="sec-text">Organic foods are typically certified by regulatory bodies to ensure they meet specific organic standards.</p>
                </div>
            </div>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="contact-feature">
                    <div class="box-icon">
                        <i class="fa-light fa-location-dot"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Our Address</h3>
                        <p class="box-text">8502 Preston Rd. Ingle wood, Maine 98380</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="contact-feature">
                    <div class="box-icon bg-theme2">
                        <i class="fa-light fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Phone Number</h3>
                        <p class="box-text">
                            <a href="tel:+16326543654">+(163)-2654-3654</a>
                            <a href="tel:+16326545566">+(163)-2654-5566</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="contact-feature">
                    <div class="box-icon bg-title">
                        <i class="fa-light fa-envelope"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Email Address</h3>
                        <p class="box-text">
                            <a href="mailto:help24/7@frutin.com">help24/7@frutin.com</a>
                            <a href="mailto:info@frutin.com">info@frutin.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="contact-feature">
                    <div class="media-body">
                        <h3 class="box-title">Follow Social Media</h3>
                        <div class="th-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a target="_blank" href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!--==============================
Contact Area
==============================-->
<div class="space-bottom">
    <div class="container">
        <form action="mail.php" method="POST" class="contact-form input-smoke ajax-contact">
            <h2 class="sec-title">Get In Touch</h2>
            <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                    <i class="fal fa-user"></i>
                </div>
                <div class="form-group col-md-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                    <i class="fal fa-envelope"></i>
                </div>
                <div class="form-group col-md-6">
                    <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                    <i class="fal fa-phone"></i>
                </div>
                <div class="form-group col-md-6">
                    <select name="subject" id="subject" class="form-select">
                        <option value="" disabled selected hidden>Select Subject</option>
                        <option value="Organic Food">Organic Food</option>
                        <option value="Fresh Fruits">Fresh Fruits</option>
                        <option value="Fresh Vegetable">Fresh Vegetable</option>
                    </select>
                    <i class="fal fa-chevron-down"></i>
                </div>
                <div class="form-group col-12">
                    <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                    <i class="fal fa-pencil"></i>
                </div>
                <div class="form-btn col-12">
                    <button class="th-btn btn-fw">Send Message<i class="fas fa-chevrons-right ms-2"></i></button>
                </div>
            </div>
            <p class="form-messages mb-0 mt-3"></p>
        </form>
    </div>
</div><!--==============================
Map Area
==============================-->
<div class="space-bottom">
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
@endsection
