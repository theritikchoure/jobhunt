@extends('student.layout')

@section('student_name', 'Ritik')

@section('menu_detail')

<span><img src="/front/images/resource/mp1.jpg" alt="" /> @yield('student_name') <i class="la la-bars"></i></span>

@endsection

@section('section')
<div class="col-lg-9 column">
    <div class="padding-left">
        <div class="profile-title" id="mp">
            <h3>My Profile</h3>
            <div class="upload-img-bar">
                <span><img src="/images/student/{{$stu->image}}" alt="" height="150px"/></span>
                <div class="upload-info">
                    <a href="#" title="">Browse</a>
                    <span>Max file size is 1MB, Minimum dimension: 270x210 And Suitable files are .jpg & .png</span>
                </div>
            </div>
        </div>
        <div class="profile-form-edit">
            <form action="" method="POST" enctype="multipart/form-data">
               @csrf
               @method('PUT')
                <div class="row">
                   <div class="col-lg-6">
                       <span class="pf-title">First Name</span>
                       <div class="pf-field">
                           <input type="text" name="first_name" value="{{$stu->first_name}}" />
                       </div>
                       @error('name')
                           <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                   </div>
                   <div class="col-lg-6">
                    <span class="pf-title">Last Name</span>
                    <div class="pf-field">
                        <input type="text" name="last_name" value="{{$stu->last_name}}" />
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Email ID</span>
                        <div class="pf-field">
                            <input type="email" name="email" value="{{$stu->email}}" />
                        </div>
                       @error('email')
                           <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                    </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Contact Number</span>
                        <div class="pf-field">
                            <input type="text" name="mobile" value="{{$stu->mobile}}"/>
                        </div>
                        @error('contact_no')
                           <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                    </div>
                   <div class="col-lg-6">
                       <span class="pf-title">Address</span>
                       <div class="pf-field">
                           <input type="text" name="address" value="{{$stu->address}}" />
                       </div>
                       @error('address')
                           <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                   </div>
                   <div class="col-lg-6">
                       <span class="pf-title">LinkedIn</span>
                       <div class="pf-field">
                           <input type="url" name="linkedin" value="{{$stu->linkedin}}" />
                           <i class="la la-linkedin"></i>
                       </div>
                       @error('linkedin')
                           <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                   </div>
                   <div class="col-lg-6">
                        <span class="pf-title">College Name</span>
                        <div class="pf-field">
                            <input type="text" name="college_name" value="{{$stu->education->college_name}}" />
                        </div>
                        @error('college_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Degree</span>
                        <div class="pf-field">
                            <select data-placeholder="Please Select Specialism" name="degree" class="chosen">
                               <option>Select Your Degree</option>
                               <option value="Diploma">Diploma</option>
                               <option value="Bachelor's">Bachelor's</option>
                               <option value="Master's">Master's</option>
                           </select>
                        </div>
                        @error('degree')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Branch</span>
                        <div class="pf-field">
                            <input type="text" name="branch" placeholder="IT"  value="{{$stu->education->branch}}"/>
                        </div>
                        @error('branch')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Pass Out</span>
                        <div class="pf-field">
                            <input type="date" name="pass_year" placeholder="" value="{{$stu->education->pass_year}}" />
                        </div>
                        @error('pass_year')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                   <div class="col-lg-12">
                       <button type="submit" style="margin-bottom: 25px;">Update</button>
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
@endsection