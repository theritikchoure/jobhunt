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

        
        <section class="overlape">
            <div class="block no-padding">
                <div data-velocity="-.1" style="background: url(/front/images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
                <div class="container fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="inner-header">
                                <h3>{{$int->title}}</h3>
                                <div class="job-statistic">
                                    <span>Intenship</span>
                                    <p><i class="la la-calendar-o"></i>{{$int->created_at->diffForHumans()}}</p>
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
                         <div class="col-lg-8 column">
                             <div class="job-single-sec">
                                 <div class="job-single-head">
                                     <div class="job-thumb"> <img src="/front/images/resource/sj.png" alt="" /> </div>
                                     <div class="job-head-info">
                                         <h4>{{$int->employer->name}}</h4>
                                         <span>{{$int->employer->address}} {{$int->employer->city}} {{$int->employer->state}} {{$int->employer->zip_code}}</span>
                                         <p><i class="la la-unlink"></i> {{$int->employer->website}}</p>
                                         <p><i class="la la-phone"></i> {{$int->employer->contact_no}}</p>
                                         <p><i class="la la-envelope-o"></i>{{$int->employer->email}}</p>
                                     </div>
                                 </div><!-- Job Head -->
                                 <div class="job-details">
                                     <h3>Job Description</h3>
                                     <p>Company is a 2016 Iowa City-born start-up that develops consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
                                     <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien</p>
                                     <h3>Required Knowledge, Skills, and Abilities</h3>
                                     <ul>
                                         <li>Ability to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS)</li>
                                         <li>Proficient in Photoshop, Illustrator, bonus points for familiarity with Sketch (Sketch is our preferred concepting)</li>
                                         <li>Cross-browser and platform testing as standard practice</li>
                                         <li>Experience using Invision a plus</li>
                                         <li>Experience in video production a plus or, at a minimum, a willingness to learn</li>
                                     </ul>
                                     <h3>Education + Experience</h3>
                                     <ul>
                                         <li>Advanced degree or equivalent experience in graphic and web design</li>
                                         <li>3 or more years of professional design experience</li>
                                         <li>Direct response email experience</li>
                                         <li>Ecommerce website design experience</li>
                                         <li>Familiarity with mobile and web apps preferred</li>
                                         <li>Excellent communication skills, most notably a demonstrated ability to solicit and address creative and design feedback</li>
                                         <li>Must be able to work under pressure and meet deadlines while maintaining a positive attitude and providing exemplary customer service</li>
                                         <li>Ability to work independently and to carry out assignments to completion within parameters of instructions given, prescribed routines, and standard accepted practices</li>
                                     </ul>
                                 </div>
                                 <div class="share-bar">
                                     <span>Share</span><a href="#" title="" class="share-fb"><i class="la la-facebook"></i></a><a href="#" title="" class="share-twitter"><i class="la la-twitter"></i></a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 column">
                             @if($applybtn)
                             <div class="apply-alternative">
                                <a class="" onclick="applied()" style="width:100%; text-align:center;" title=""><i style="float:none" class="la la-paper-plane"></i>Applied</a>
                             </div>
                             @else
                             <a class="apply-thisjob" href="/internships/apply/{{$int->id}}" title=""><i class="la la-paper-plane"></i>Apply for job</a>
                             @endif                                
                             <div class="job-overview">
                                 <h3>Job Overview</h3>
                                 <ul>
                                     <li><i class="la la-tag"></i><h3>Category</h3><span>{{$int->category}}</span></li>
                                     <li><i class="la la-money"></i><h3>Offerd Salary</h3><span>{{$int->salary}}</span></li>
                                     <li><i class="la la-shield"></i><h3>No. of Openings</h3><span>{{$int->openings}}</span></li>
                                     <li><i class="la la-clock-o"></i><h3>Duration</h3><span>{{$int->duration}} Months</span></li>
                                 </ul>
                             </div><!-- Job Overview -->
                         </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block pt-0">
                <div class="container">
                    <div class="row">
                         <div class="col-lg-8 column">
                             <div class="job-single-sec">
                                <div class="recent-jobs">
                                    <h3>Recent Jobs</h3>
                                    <div class="job-list-modern">
                                        <div class="job-listings-sec no-border">
                                        <div class="job-listing wtabs">
                                            <div class="job-title-sec">
                                                <div class="c-logo"> <img src="/front/images/resource/l1.png" alt="" /> </div>
                                                <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                                <span>Massimo Artemisis</span>
                                                <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                            </div>
                                            <div class="job-style-bx">
                                                <span class="job-is ft">Full time</span>
                                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                                <i>5 months ago</i>
                                            </div>
                                        </div>
                                        <div class="job-listing wtabs">
                                            <div class="job-title-sec">
                                                <div class="c-logo"> <img src="/front/images/resource/l2.png" alt="" /> </div>
                                                <h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
                                                <span>Massimo Artemisis</span>
                                                <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                            </div>
                                            <div class="job-style-bx">
                                                <span class="job-is pt ">Part time</span>
                                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                                <i>5 months ago</i>
                                            </div>
                                        </div><!-- Job -->
                                        <div class="job-listing wtabs">
                                            <div class="job-title-sec">
                                                <div class="c-logo"> <img src="/front/images/resource/l3.png" alt="" /> </div>
                                                <h3><a href="#" title="">Regional Sales Manager South</a></h3>
                                                <span>Massimo Artemisis</span>
                                                <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                            </div>
                                            <div class="job-style-bx">
                                                <span class="job-is ft ">Full time</span>
                                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                                <i>5 months ago</i>
                                            </div>
                                        </div><!-- Job -->
                                        <div class="job-listing wtabs">
                                            <div class="job-title-sec">
                                                <div class="c-logo"> <img src="/front/images/resource/l4.png" alt="" /> </div>
                                                <h3><a href="#" title="">Marketing Dairector</a></h3>
                                                <span>Massimo Artemisis</span>
                                                <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                            </div>
                                            <div class="job-style-bx">
                                                <span class="job-is ft ">Full time</span>
                                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                                <i>5 months ago</i>
                                            </div>
                                        </div><!-- Job -->
                                    </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </section>


        @include('include.footer')

    </div>

    
    

    @include('include.basicjs')

    @if(Session::has('success'))
    <script>
        toastr.options =
        {
            "closeButton" : false,
            "progressBar" : true
        }
                toastr.success("{{ session('success') }}");
    </script>
    @endif

    <script>
        function applied(){
            toastr.options =
            {
                "closeButton" : false,
                "progressBar" : true
            }
                    toastr.error("You Have Already Applied for this Internship");
        }
    </script>

</body>

</html>