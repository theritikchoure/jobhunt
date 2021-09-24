@extends('student.layout')

@section('student_name', 'Ritik')

@section('menu_detail')

<span><img src="/front/images/resource/mp1.jpg" alt="" /> @yield('student_name') <i class="la la-bars"></i></span>

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
                           <a href="#" title="">
                               <i class="la la-briefcase"></i>
                               <span>Applied Job</span>
                               <p>14 Applications</p>
                           </a>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-4 col-sm-12">
                       <div class="p-category view-resume-list">
                           <a href="#" title="">
                               <i class="la la-eye"></i>
                               <span>View Resume</span>
                               <p>22 View Statistic</p>
                           </a>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-4 col-sm-12">
                       <div class="p-category">
                           <a href="#" title="">
                               <i class="la la-file-text "></i>
                               <span>My Resume</span>
                               <p>Create New Resume</p>
                           </a>
                       </div>
                   </div>
               </div>
           </div>
           <div class="cat-sec">
               <div class="row no-gape">
                   <div class="col-lg-4 col-md-4 col-sm-12">
                       <div class="p-category">
                           <a href="#" title="">
                               <i class="la la-check"></i>
                               <span>Appropriate For Me</span>
                               <p>(05 Jobs)</p>
                           </a>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-4 col-sm-12">
                       <div class="p-category follow-companies-popup">
                           <a href="#" title="">
                               <i class="la la-user"></i>
                               <span>Follow Companies</span>
                               <p>56 Companies</p>
                           </a>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-4 col-sm-12">
                       <div class="p-category">
                           <a href="#" title="">
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