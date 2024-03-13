@extends('site.index')
@section('titre', 'Services')
@section('content')
    <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="monlapin/assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Service Details</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-organic-farm.html">Home</a></li>
                <li>Service Details</li>
            </ul>
        </div>
    </div>
</div><!--==============================
Service Area
==============================-->
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-8">
                <div class="page-single mb-30">
                    <div class="page-img">
                        <img src="monlapin/assets/img/service/service_details.jpg" alt="Service Image">
                    </div>
                    <div class="page-content">
                        <h2 class="sec-title page-title">Fresh Vegetable</h2>
                        <p class="">At our organic farm, we begin with the foundation of healthy, nutrient-rich soil. We employ sustainable practices such as crop rotation, cover cropping, and composting. This helps maintain soil fertility, structure, and microbial diversity. By avoiding synthetic fertilizers and pesticides, we allow natural processes to flourish, creating a balanced ecosystem where plants can thrive.</p>
                        <p class="mb-30">In organic livestock farming, animals are treated with care and respect. They are provided with access to the outdoors, clean living conditions, and are not given growth hormones or antibiotics.</p>








                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4">
                <aside class="sidebar-area">


                    <div class="widget widget_quote  ">
                        <h3 class="widget_title">Nous joindre</h3>
                        <form action="mail.php" method="POST" class="widget-form form-rounded-10">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="number" id="number" placeholder="Your Number">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                <i class="fal fa-comment"></i>
                            </div>
                            <div class="form-btn">
                                <button class="th-btn w-100">Ask Question Now</button>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection
