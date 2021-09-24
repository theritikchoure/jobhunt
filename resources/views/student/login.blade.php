@extends('pages.layout')

@section('page_title', 'Login')
    

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
                                <form method="POST" action="">
                                    @csrf
                                    <div class="cfield">
                                        <input type="text" name="email" placeholder="Email" />
                                        <i class="la la-user"></i>
                                    </div>
                                    @error('email')
                                        <div class="text text-danger">{{ $message }}</div>
                                        <br>
                                    @enderror
                                    <div class="cfield">
                                        <input type="password" name="password" placeholder="Password" />
                                        <i class="la la-key"></i>
                                    </div>
                                    @error('password')
                                        <div class="text text-danger align-left">{{ $message }}</div>
                                    @enderror
                                    <a href="{{route('employer.forget.password.get')}}" title="">Forgot Password?</a>
                                    <button type="submit">Login</button>
                                </form>
                            </div>
                        </div><!-- LOGIN POPUP -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

