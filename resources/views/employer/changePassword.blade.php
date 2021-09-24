@extends('employer.layout')

@section('employer_name', 'Ritik')

@section('menu_detail')

<span><img src="/front/images/resource/profile.jpg" alt="" /> @yield('employer_name') <i class="la la-angle-down"></i></span>
    
@endsection

@section('section')
<div class="col-lg-9 column">
    <div class="padding-left">
        <div class="manage-jobs-sec">
            <h3>Change Password</h3>
            <div class="change-password">
                <form action="" method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6">
                            {{-- @if (Session::has('success'))
                                <div class="alert alert-success mt-5">{{session::get('success')}}</div>
                            @endif
                            @if (Session::has('fail'))
                                <div class="alert alert-danger mt-5">{{session::get('fail')}}</div>
                            @endif --}}
                            <span class="pf-title">Old Password</span>
                            <div class="pf-field">
                                <input type="password" name="old_password" />
                            </div>
                            @error('old_password')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                            <span class="pf-title">New Password</span>
                            <div class="pf-field">
                                <input type="password" name="password" />
                            </div>
                            @error('password')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                            <span class="pf-title">Confirm Password</span>
                            <div class="pf-field">
                                <input type="password" name="password_confirmation" />
                            </div>
                            @error('password_confirmation')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" style="margin-bottom: 25px;">Update</button>
                        </div>
                        <div class="col-lg-6">
                            <i class="la la-key big-icon"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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
@endsection