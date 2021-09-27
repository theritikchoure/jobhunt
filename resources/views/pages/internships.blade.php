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

        <section class="overlape">
            <div class="block no-padding">
                <div data-velocity="-.1" style="background: url(/front_asset/images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
                <div class="container fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="inner-header wform">
                                <div class="job-search-sec">
                                    <div class="job-search">
                                        <h4>Explore Thousand Of Jobs With Just Simple Search...</h4>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <div class="job-field">
                                                        <input type="text" placeholder="Job title, keywords or company name" />
                                                        <i class="la la-keyboard-o"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="job-field">
                                                        <select data-placeholder="City, province or region" class="chosen-city">
                                                            <option>Instambul</option>
                                                            <option>New York</option>
                                                            <option>London</option>
                                                            <option>Russia</option>
                                                        </select>
                                                        <i class="la la-map-marker"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <button type="submit"><i class="la la-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section>
            <div class="block remove-top">
                <div class="container">
                     <div class="row no-gape">
                         <div class="col-lg-2"></div>
                         <div class="col-lg-8 column mt-5">
                             <div class="job-list-modern">
                                 <div class="job-listings-sec no-border">
                                    @foreach ($internship as $item)
                                        <div class="job-listing wtabs">
                                            <div class="job-title-sec">
                                                <div class="c-logo"> <img src="/front_asset/images/resource/l1.png" alt="" /> </div>
                                                <h3><a href="#" title="">{{$item->title}}</a></h3>
                                                <span>{{$item->category}}</span>
                                            </div>
                                            <div class="job-style-bx">
                                                <a href="/internships/details/{{$item->id}}">
                                                    <button class="job-is ft">Apply</button>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="pagination" style="align-items: center; display:inherit;">
                                    {!! $internship->links() !!}
                                </div><!-- Pagination -->
                             </div>
                        </div>
                        <div class="col-lg-2"></div>
                     </div>
                </div>
            </div>
        </section>
        @include('include.footer')

    </div>

    
    

    @include('include.basicjs')

</body>

</html>