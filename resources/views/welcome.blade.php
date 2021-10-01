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
        <img src="/front_asset/images/loader.gif" alt="" />
    </div>

    <div class="theme-layout" id="scrollup">

        <div class="responsive-header">
            <div class="responsive-menubar">
                <div class="res-logo"><a href="/" title=""><img src="/front_asset/images/resource/logo.png" alt="" /></a></div>
                <div class="menu-resaction">
                    <div class="res-openmenu">
                        <img src="/front_asset/images/icon.png" alt="" /> Menu
                    </div>
                    <div class="res-closemenu">
                        <img src="/front_asset/images/icon2.png" alt="" /> Close
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
                        <a href="/" title=""><img class="hidesticky" src="/front_asset/images/resource/logo.png" alt="" /><img class="showsticky" src="/front_asset/images/resource/logo10.png" alt="" /></a>
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
                                    <img src="/front_asset/images/resource/vector-1.png">
                                </div>
                                <div class="job-search-sec">
                                    <div class="job-search">
                                        <h3>The Easiest Way to Get Your New Job</h3>
                                        <span>Find Jobs, Employment & Career Opportunities</span>
                                        <form method="GET">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-5 col-sm-12 col-xs-12"></div>
                                                <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12">
                                                    <div class="job-field">
                                                        <input type="text" name="search" placeholder="Job title, keywords or company name" value="{{old('search')}}"  autocomplete="on"/>
                                                        <i class="la la-keyboard-o"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                                                    <button type="submit"><i class="la la-search"></i></button>
                                                </div>
                                                <div class="col-lg-2 col-md-5 col-sm-12 col-xs-12"></div>
                                            </div>
                                        </form>
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
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div class="heading">
                                <h2>Featured Jobs</h2>
                                <span>Leading Employers already using job and talent.</span>
                            </div>
                            <!-- Heading -->
                            <div class="job-listings-sec">
                                @foreach ($int as $item)
                                    <!-- Job -->
                                    <div class="job-listing" style="padding-left:50px;">
                                        <div class="job-title-sec">
                                            <h3><a href="/internships/details/{{$item->id}}" title="">{{$item->title}}</a></h3>
                                            <span>{{$item->category}}</span>
                                        </div>
                                        <span class="job-lctn"><i class="la la-user-tie"></i>{{$item->employer->name}}</span>
                                        <a href="/internships/details/{{$item->id}}"><span class="job-is ft">Apply</span></a>
                                        
                                    </div>
                                    <!-- /Job -->
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-12">
                            <div class="pagination" style="align-items: center; display:inherit;">
                                {!! $int->links() !!}
                            </div><!-- Pagination -->
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
                                <span>We're here to help. Check out our FAQs, send us an email or call us at +91 1234567890</span>
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