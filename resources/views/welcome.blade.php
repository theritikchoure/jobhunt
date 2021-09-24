<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Job Hunt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="CreativeLayers">

    <!-- Styles -->
    @include('include.basiccss')
    

</head>

<body>

    <div class="page-loading">
        <img src="/front/images/loader.gif" alt="" />
    </div>

    <div class="theme-layout" id="scrollup">

        <div class="responsive-header">
            <div class="responsive-menubar">
                <div class="res-logo"><a href="/" title=""><img src="/front/images/resource/logo.png" alt="" /></a></div>
                <div class="menu-resaction">
                    <div class="res-openmenu">
                        <img src="/front/images/icon.png" alt="" /> Menu
                    </div>
                    <div class="res-closemenu">
                        <img src="/front/images/icon2.png" alt="" /> Close
                    </div>
                </div>
            </div>
            <div class="responsive-opensec">
               
                <!-- Btn Extras -->
                <form class="res-search">
                    <input type="text" placeholder="Job title, keywords or company name" />
                    <button type="submit"><i class="la la-search"></i></button>
                </form>
                <div class="responsivemenu">
                    @include('include.menu')
                </div>
            </div>
        </div>

        <header class="stick-top forsticky">
            <div class="menu-sec">
                <div class="container">
                    <div class="logo">
                        <a href="/" title=""><img class="hidesticky" src="/front/images/resource/logo.png" alt="" /><img class="showsticky" src="/front/images/resource/logo10.png" alt="" /></a>
                    </div>
                    <!-- Logo -->

                    <!-- Btn Extras -->
                    <nav>
                        @include('include.menu')
                    </nav>
                    <!-- Menus -->
                </div>
            </div>
        </header>

        <section>
            <div class="block no-padding">
                <div class="container fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-featured-sec">
                                <div class="new-slide">
                                    <img src="/front/images/resource/vector-1.png">
                                </div>
                                <div class="job-search-sec">
                                    <div class="job-search">
                                        <h3>The Easiest Way to Get Your New Job</h3>
                                        <span>Find Jobs, Employment & Career Opportunities</span>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12">
                                                    <div class="job-field">
                                                        <input type="text" placeholder="Job title, keywords or company name" />
                                                        <i class="la la-keyboard-o"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                                    <div class="job-field">
                                                        <select data-placeholder="City, province or region" class="chosen-city">
														<option>New York </option>
														<option>Istanbul</option>
														<option>London</option>
														<option>Russia</option>
													</select>
                                                        <i class="la la-map-marker"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                                                    <button type="submit"><i class="la la-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="or-browser">
                                            <span>Browse job offers by</span>
                                            <a href="#" title="">Category</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="scroll-to">
                                    <a href="#scroll-here" title=""><i class="la la-arrow-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="scroll-here">
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading">
                                <h2>Popular Categories</h2>
                                <span>37 jobs live - 0 added today.</span>
                            </div>
                            <!-- Heading -->
                            <div class="cat-sec">
                                <div class="row no-gape">
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
											<i class="la la-bullhorn"></i>
											<span>Design, Art & Multimedia</span>
											<p>(22 open positions)</p>
										</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
											<i class="la la-graduation-cap"></i>
											<span>Education Training</span>
											<p>(6 open positions)</p>
										</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
											<i class="la la-line-chart "></i>
											<span>Accounting / Finance</span>
											<p>(3 open positions)</p>
										</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
											<i class="la la-users"></i>
											<span>Human Resource</span>
											<p>(3 open positions)</p>
										</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cat-sec">
                                <div class="row no-gape">
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
											<i class="la la-phone"></i>
											<span>Telecommunications</span>
											<p>(22 open positions)</p>
										</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
											<i class="la la-cutlery"></i>
											<span>Restaurant / Food Service</span>
											<p>(6 open positions)</p>
										</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
											<i class="la la-building"></i>
											<span>Construction / Facilities</span>
											<p>(3 open positions)</p>
										</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
											<i class="la la-user-md"></i>
											<span>Health</span>
											<p>(3 open positions)</p>
										</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="browse-all-cat">
                                <a href="#" title="">Browse All Categories</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block double-gap-top double-gap-bottom">
                <div data-velocity="-.1" style="background: url(/front/images/resource/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color"></div>
                <!-- PARALLAX BACKGROUND IMAGE -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="simple-text-block">
                                <h3>Make a Difference with Your Online Resume!</h3>
                                <span>Your resume in minutes with JobHunt resume assistant is ready!</span>
                                <a href="#" title="">Create an Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading">
                                <h2>Featured Jobs</h2>
                                <span>Leading Employers already using job and talent.</span>
                            </div>
                            <!-- Heading -->
                            <div class="job-listings-sec">
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="/front/images/resource/l1.png" alt="" /> </div>
                                        <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                        <span>Massimo Artemisis</span>
                                    </div>
                                    <span class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <span class="job-is ft">FULL TIME</span>
                                </div>
                                <!-- Job -->
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="/front/images/resource/l2.png" alt="" /> </div>
                                        <h3><a href="#" title="">Marketing Director</a></h3>
                                        <span>Tix Dog</span>
                                    </div>
                                    <span class="job-lctn"><i class="la la-map-marker"></i>Rennes, France</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <span class="job-is pt">PART TIME</span>
                                </div>
                                <!-- Job -->
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="/front/images/resource/l3.png" alt="" /> </div>
                                        <h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
                                        <span>StarHealth</span>
                                    </div>
                                    <span class="job-lctn"><i class="la la-map-marker"></i>London, United Kingdom</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <span class="job-is ft">FULL TIME</span>
                                </div>
                                <!-- Job -->
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="/front/images/resource/l4.png" alt="" /> </div>
                                        <h3><a href="#" title="">Application Developer For Android</a></h3>
                                        <span>Altes Bank</span>
                                    </div>
                                    <span class="job-lctn"><i class="la la-map-marker"></i>Istanbul, Turkey</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <span class="job-is fl">FREELANCE</span>
                                </div>
                                <!-- Job -->
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="/front/images/resource/l5.png" alt="" /> </div>
                                        <h3><a href="#" title="">Regional Sales Manager South east Asia</a></h3>
                                        <span>Vincent</span>
                                    </div>
                                    <span class="job-lctn"><i class="la la-map-marker"></i>Ajax, Ontario</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <span class="job-is tp">TEMPORARY</span>
                                </div>
                                <!-- Job -->
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="/front/images/resource/l6.png" alt="" /> </div>
                                        <h3><a href="#" title="">Social Media and Public Relation Executive </a></h3>
                                        <span>MediaLab</span>
                                    </div>
                                    <span class="job-lctn"><i class="la la-map-marker"></i>Ankara / Turkey</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <span class="job-is ft">FULL TIME</span>
                                </div>
                                <!-- Job -->
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="browse-all-cat">
                                <a href="#" title="">Load more listings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block">
                <div data-velocity="-.1" style="background: url(/front/images/resource/parallax2.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color light"></div>
                <!-- PARALLAX BACKGROUND IMAGE -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading light">
                                <h2>Kind Words From Happy Candidates</h2>
                                <span>What other people thought about the service provided by JobHunt</span>
                            </div>
                            <!-- Heading -->
                            <div class="reviews-sec" id="reviews-carousel">
                                <div class="col-lg-6">
                                    <div class="reviews">
                                        <img src="/front/images/resource/r1.jpg" alt="" />
                                        <h3>Augusta Silva <span>Web designer</span></h3>
                                        <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite believe the service</p>
                                    </div>
                                    <!-- Reviews -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="reviews">
                                        <img src="/front/images/resource/r2.jpg" alt="" />
                                        <h3>Ali Tufan <span>Web designer</span></h3>
                                        <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite believe the service</p>
                                    </div>
                                    <!-- Reviews -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="reviews">
                                        <img src="/front/images/resource/r1.jpg" alt="" />
                                        <h3>Augusta Silva <span>Web designer</span></h3>
                                        <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite believe the service</p>
                                    </div>
                                    <!-- Reviews -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="reviews">
                                        <img src="/front/images/resource/r2.jpg" alt="" />
                                        <h3>Ali Tufan <span>Web designer</span></h3>
                                        <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite believe the service</p>
                                    </div>
                                    <!-- Reviews -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading">
                                <h2>Companies We've Helped</h2>
                                <span>Some of the companies we've helped recruit excellent applicants over the years.</span>
                            </div>
                            <!-- Heading -->
                            <div class="comp-sec">
                                <div class="company-img">
                                    <a href="#" title=""><img src="/front/images/resource/cc1.jpg" alt="" /></a>
                                </div>
                                <!-- Client  -->
                                <div class="company-img">
                                    <a href="#" title=""><img src="/front/images/resource/cc2.jpg" alt="" /></a>
                                </div>
                                <!-- Client  -->
                                <div class="company-img">
                                    <a href="#" title=""><img src="/front/images/resource/cc3.jpg" alt="" /></a>
                                </div>
                                <!-- Client  -->
                                <div class="company-img">
                                    <a href="#" title=""><img src="/front/images/resource/cc4.jpg" alt="" /></a>
                                </div>
                                <!-- Client  -->
                                <div class="company-img">
                                    <a href="#" title=""><img src="/front/images/resource/cc5.jpg" alt="" /></a>
                                </div>
                                <!-- Client  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block">
                <div data-velocity="-.1" style="background: url(/front/images/resource/parallax3.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div>
                <!-- PARALLAX BACKGROUND IMAGE -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading">
                                <h2>Quick Career Tips</h2>
                                <span>Found by employers communicate directly with hiring managers and recruiters.</span>
                            </div>
                            <!-- Heading -->
                            <div class="blog-sec">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="my-blog">
                                            <div class="blog-thumb">
                                                <a href="#" title=""><img src="/front/images/resource/b1.jpg" alt="" /></a>
                                                <div class="blog-metas">
                                                    <a href="#" title="">March 29, 2017</a>
                                                    <a href="#" title="">0 Comments</a>
                                                </div>
                                            </div>
                                            <div class="blog-details">
                                                <h3><a href="#" title="">Attract More Attention Sales And Profits</a></h3>
                                                <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                                <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="my-blog">
                                            <div class="blog-thumb">
                                                <a href="#" title=""><img src="/front/images/resource/b2.jpg" alt="" /></a>
                                                <div class="blog-metas">
                                                    <a href="#" title="">March 29, 2017</a>
                                                    <a href="#" title="">0 Comments</a>
                                                </div>
                                            </div>
                                            <div class="blog-details">
                                                <h3><a href="#" title="">11 Tips to Help You Get New Clients</a></h3>
                                                <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                                <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="my-blog">
                                            <div class="blog-thumb">
                                                <a href="#" title=""><img src="/front/images/resource/b3.jpg" alt="" /></a>
                                                <div class="blog-metas">
                                                    <a href="#" title="">March 29, 2017</a>
                                                    <a href="#" title="">0 Comments</a>
                                                </div>
                                            </div>
                                            <div class="blog-details">
                                                <h3><a href="#" title="">An Overworked Newspaper Editor</a></h3>
                                                <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                                <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block no-padding">
                <div class="container fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="simple-text">
                                <h3>Gat a question?</h3>
                                <span>We're here to help. Check out our FAQs, send us an email or call us at 1 (800) 555-5555</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('include.footer')

    </div>

    
    

    @include('include.basicjs')

</body>

</html>