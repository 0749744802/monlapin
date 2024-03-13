@extends('site.index')
@section('titre', 'Blog')
@section('content')
    <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="monlapin/assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Blog Standard</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-organic-farm.html">Home</a></li>
                <li>Blog Standard</li>
            </ul>
        </div>
    </div>
</div><!--==============================
Blog Area
==============================-->
<section class="th-blog-wrapper space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">
                <div class="th-blog blog-single has-post-thumbnail">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="monlapin/assets/img/blog/blog-s-1-1.jpg" alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a class="author" href="blog.html"><i class="far fa-user"></i>By Frutin</a>
                            <a href="blog.html"><i class="far fa-calendar"></i>21 June, 2023</a>
                            <a href="blog-details.html"><i class="far fa-comments"></i>Comments (3)</a>
                        </div>
                        <h2 class="blog-title"><a href="blog-details.html">Change Your Eating Habits With Organic Food</a>
                        </h2>
                        <p class="blog-text">Some studies suggest that organic foods may have higher levels of certain nutrients and antioxidants compared to conventionally grown foods. However, this can vary depending on factors like soil quality and growing conditions.</p>
                       
                    </div>
                </div>



                <div class="th-pagination text-center">
                    <ul>
                        <li><a href="blog.html">1</a></li>
                        <li><a href="blog.html">2</a></li>
                        <li><a href="blog.html">3</a></li>
                        <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area">
                    <div class="widget widget_search  ">
                        <form class="search-form">
                            <input type="text" placeholder="Enter Keyword">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>

                    <div class="widget  ">
                        <h3 class="widget_title">Recent Posts</h3>
                        <div class="recent-post-wrap">
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="monlapin/assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Change Your Eating Habits With Organic Food</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="far fa-calendar"></i>21 June, 2023</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="monlapin/assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Transform Your Nutrition with Organic Meal</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="far fa-calendar"></i>22 June, 2023</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="monlapin/assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Improve Your Health By Organic Eating</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="far fa-calendar"></i>23 June, 2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</section>
@endsection
