@extends('employer.layout')

@section('employer_name', $emp->name)

@section('menu_detail')

<span><img src="/images/employer/{{$emp->logo}}" width="50" height="50" alt="" /> @yield('employer_name') <i class="la la-angle-down"></i></span>
    
@endsection

@section('section')

<div class="col-lg-9 column">
    <div class="padding-left">
        <div class="profile-title" id="mp">
            <h3>{{$stu->first_name}}'s Profile</h3>
            <div class="upload-img-bar">
                <span><img src="/images/student/{{$stu->image}}" alt="" height="150px"/></span>
                <div class="upload-info">
                </div>
            </div>
        </div>
        <div class="profile-form-edit">
            <form>
                <div class="row">
                   <div class="col-lg-6">
                       <span class="pf-title">First Name</span>
                       <div class="pf-field">
                           <input disabled value="{{$stu->first_name}}" />
                        </div>
                   </div>
                   <div class="col-lg-6">
                    <span class="pf-title">Last Name</span>
                    <div class="pf-field">
                        <input disabled value="{{$stu->last_name}}" />
                    </div>
                </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Email ID</span>
                        <div class="pf-field">
                            <input disabled value="{{$stu->email}}" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Contact Number</span>
                        <div class="pf-field">
                            <input disabled value="{{$stu->mobile}}"/>
                        </div>
                    </div>
                   <div class="col-lg-6">
                       <span class="pf-title">Address</span>
                       <div class="pf-field">
                           <input disabled value="{{$stu->address}}" />
                       </div>
                   </div>
                   <div class="col-lg-6">
                       <span class="pf-title">LinkedIn</span>
                       <div class="pf-field">
                           <input disabled  value="{{$stu->linkedin}}" />
                           <i class="la la-linkedin"></i>
                       </div>
                   </div>
                   <div class="col-lg-6">
                        <span class="pf-title">College Name</span>
                        <div class="pf-field">
                            <input disabled value="{{$stu->education->college_name}}" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Degree</span>
                        <div class="pf-field">
                            <input disabled value="{{$stu->education->degree}}"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Branch</span>
                        <div class="pf-field">
                            <input disabled value="{{$stu->education->branch}}"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Pass Out</span>
                        <div class="pf-field">
                            <input disabled value="{{$stu->education->pass_year}}" />
                        </div>
                    </div>
                </div>
            </form>
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