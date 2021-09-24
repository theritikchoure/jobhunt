@extends('pages.layout')

@section('page_title', 'Forget Password')
    

@section('section')

    <section>
        <div class="block remove-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="account-popup-area signin-popup-box static">
                            <div class="account-popup">
                                @if (Session::has('success'))
                                    <div class="alert alert-success">{{session::get('success')}}</div>
                                @endif
                                @if (Session::has('fail'))
                                    <div class="alert alert-success">{{session::get('fail')}}</div>
                                @endif
                                <form method="POST" action="{{route('employer.reset.password.post')}}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="cfield">
                                        <input type="text" name="email" placeholder="Email" />
                                        <i class="la la-user"></i>
                                    </div>
                                    <div class="cfield">
                                        <input type="password" name="password" placeholder="New Password" />
                                        <i class="la la-key"></i>
                                    </div>
                                    <div class="cfield">
                                        <input type="password" name="password_confirmation" placeholder="Confirm Password" />
                                        <i class="la la-key"></i>
                                    </div>
                                    <button type="submit">Reset Password</button>
                                </form>
                            </div>
                        </div><!-- LOGIN POPUP -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (Session::has('message'))
        <script>
            toastr.options =
            {
                "closeButton" : false,
                "progressBar" : true
            }
                    toastr.success("{{ session('message') }}");
        </script>
    @endif

@endsection

