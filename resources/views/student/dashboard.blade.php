@extends('student.layout')

@section('student_name', 'Ritik')

@section('menu_detail')

<span><img src="/front_asset/images/resource/mp1.jpg" alt="" /> @yield('student_name') <i class="la la-bars"></i></span>

@endsection

@section('section')
<div class="col-lg-9 column">
    <div class="padding-left">
        <div class="manage-jobs-sec">
            <h3>Student Dashboard</h3>
            <div class="cat-sec">
               <div class="row no-gape">
                   <div class="col-lg-4 col-md-4 col-sm-12">
                       <div class="p-category">
                           <a href="{{route('internship')}}" title="">
                               <i class="la la-briefcase"></i>
                               <span>Internships</span>
                               <p>Apply for New Internships</p>
                           </a>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-4 col-sm-12">
                       <div class="p-category">
                           <a href="/resume/student/{{$stu->resume}}" target="_blank" title="">
                               <i class="la la-eye"></i>
                               <span>View Resume</span>
                               <p>Check Your Resume</p>
                           </a>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="p-category">
                        <a href="{{route('student.profile.get')}}" title="">
                            <i class="la la-file"></i>
                            <span>My Profile</span>
                            <p>View Profile</p>
                        </a>
                    </div>
                </div>
               </div>
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