@extends('pages.layout')

@section('page_title', 'Contact Us')

@section('section')

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 column">
                        <div class="contact-form">
                            <h3>Keep In Touch</h3>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="pf-title">Full Name</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="ALi TUFAN" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Email</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="ALi TUFAN" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Subject</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="ALi TUFAN" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Message</span>
                                        <div class="pf-field">
                                            <textarea></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 column">
                        <div class="contact-textinfo style2">
                            <h3>JobHunt Office</h3>
                            <ul>
                                <li><i class="la la-map-marker"></i><span>Jobify Inc. 555 Madison Avenue, Suite F-2 Manhattan, New York 10282 </span></li>
                                <li><i class="la la-phone"></i><span>Call Us : 0934 343 343</span></li>
                                <li><i class="la la-fax"></i><span>Fax : 0934 343 343</span></li>
                                <li><i class="la la-envelope-o"></i><span>Email : info@jobhunt.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection