    <!------------- Login Popups ------------>

    <div class="account-popup-area signin-popup-box" id="studentlogin">
        <div class="account-popup">
            <span class="close-popup"><i class="la la-close"></i></span>
            <h3>Student Login</h3>
            <br>
            <hr>
            <form action="{{route('student.login_check')}}" method="POST">
                @csrf
                <div class="cfield">
                    <input type="text" name="email" placeholder="Username" />
                    <i class="la la-user"></i>
                </div>
                <div class="cfield">
                    <input type="password" name="password" placeholder="********" />
                    <i class="la la-key"></i>
                </div>
                <p class="remember-label">
                    <a href="{{route('student.register')}}" title="">Don't have an account?</a>
                </p>
                <a href="{{route('employer.forget.password.get')}}" title="">Forgot Password?</a>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <div class="account-popup-area signin-popup-box" id="employerlogin">
        <div class="account-popup">
            <span class="close-popup"><i class="la la-close"></i></span>
            <h3>Employer Login</h3>
            <br>
            <hr>
            {{-- @if (Session::has('fail'))
                <div class="alert alert-success">{{session::get('fail')}}</div>
            @endif --}}
            <form action="{{route('employer.login_check')}}" method="POST">
                @csrf
                <div class="cfield">
                    <input type="email" name="email" placeholder="Email" />
                    <i class="la la-user"></i>
                </div>
                <div class="cfield">
                    <input type="password" name="password" placeholder="********" />
                    <i class="la la-key"></i>
                </div>
                <p class="remember-label">
                    <a href="{{route('employer.register')}}" title="">Don't have an account?</a>
                </p>
                <a href="{{route('employer.forget.password.get')}}" title="">Forgot Password?</a>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    <!-- LOGIN POPUP End -->


    <!-- LOGIN POPUP End -->

    
    @if(Session::has('fail'))
        <script>
            toastr.options =
            {
                "closeButton" : false,
                "progressBar" : true
            }
                    toastr.error("{{ session('fail') }}");
        </script>
    @endif
    
