<footer>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 column">
                    <div class="widget">
                        <div class="about_widget">
                            <div class="logo">
                                <a href="/" title=""><img src="/front_asset/images/resource/logo.png" alt="" /></a>
                            </div>
                            <span>Kolar Road, Bhopal</span>
                            <span>+91 6261539526</span>
                            <span>ritvikchoure65@gmail.com</span>
                            <div class="social">
                                <a href="#" title=""><i class="la la-facebook"></i></a>
                                <a href="#" title=""><i class="la la-twitter"></i></a>
                                <a href="#" title=""><i class="la la-linkedin"></i></a>
                                <a href="#" title=""><i class="la la-pinterest"></i></a>
                                <a href="#" title=""><i class="la la-behance"></i></a>
                            </div>
                        </div>
                        <!-- About Widget -->
                    </div>
                </div>
                <div class="col-lg-4 column">
                    <div class="widget">
                        <h3 class="footer-title">Quick Links</h3>
                        <div class="link_widgets">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="{{route('about')}}" title="">About Us </a>
                                    <a href="{{route('contact')}}" title="">Contact Us</a>
                                    <a href="{{route('faq')}}" title="">FAQ's </a>
                                    <a href="{{route('how_it_work')}}" title="">How It Works</a>
                                    <a href="{{route('termcon')}}" title="">Terms &amp; Conditions</a>
                                </div>
                                @if (Session::has('LoggedStu') && Session::has('LoggedEmp'))
                                    
                                @else
                                    <div class="col-lg-6">
                                        <a href="{{route('employer.register')}}" title="">Register As Employer </a>
                                        <a href="#" title="">Register As Student </a>
                                        <a href="#" title="" onclick="openEmployerLogin()">Login As Employer </a>
                                        <a href="#" title="" onclick="openStudentLogin()">Login As Student </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 column">
                    <div class="widget">
                        <h3 class="footer-title">Find Internship</h3>
                        <div class="link_widgets">
                            <div class="row">
                                <div class="col-lg-12">
                                    {{-- @foreach ($cat as $item)
                                        <a href="/internship/" title="">{{$item->name}}</a>
                                    @endforeach --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 column">
                    <div class="widget">
                        <div class="download_widget">
                            <a href="/" title=""><img src="/front_asset/images/resource/dw1.png" alt="" /></a>
                            <a href="/" title=""><img src="/front_asset/images/resource/dw2.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-line">
        <span> Used Only for Learning Purpose by <a href="https://github.com/theritikchoure" style="color:white;" target="_blank"> Ritik Chourasiya </a>. Copyright © Design by <a href="https://creativelayers.net/" style="color:white;" target="_blank">Creative Layers</a></span>
        <a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
    </div>
</footer>