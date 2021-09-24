@extends('employer.layout')

@section('employer_name', $emp->name)

@section('menu_detail')

<span><img src="/images/employer/{{$emp->logo}}" width="50" height="50" alt="" /> @yield('employer_name') <i class="la la-angle-down"></i></span>
    
@endsection

@section('section')
<div class="col-lg-9 column">
    <div class="padding-left">
        <div class="profile-title" id="mp">
            <h3>My Profile</h3>
            <div class="upload-img-bar">
                <span><img src="/images/employer/{{$emp->logo}}" alt="" /></span>
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
                   <div class="col-lg-12">
                       <span class="pf-title">Employer/Company Name</span>
                       <div class="pf-field">
                           <input type="text" name="name" value="{{$emp->name}}" />
                       </div>
                       @error('name')
                           <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                   </div>
                   <div class="col-lg-12">
                       <span class="pf-title">Description</span>
                       <div class="pf-field">
                           <textarea name="description">{{$emp->description}}</textarea>
                       </div>
                       @error('description')
                           <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                   </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Email ID</span>
                        <div class="pf-field">
                            <input type="email" name="email" value="{{$emp->email}}" />
                        </div>
                       @error('email')
                           <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                    </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Contact Number</span>
                        <div class="pf-field">
                            <input type="text" name="contact_no" value="{{$emp->contact_no}}"/>
                        </div>
                        @error('contact_no')
                           <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                    </div>
                   <div class="col-lg-6">
                       <span class="pf-title">Address</span>
                       <div class="pf-field">
                           <input type="text" name="address" value="{{$emp->address}}" />
                       </div>
                       @error('address')
                           <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                   </div>
                   <div class="col-lg-6">
                       <span class="pf-title">City</span>
                       <div class="pf-field">
                           <input type="text" name="city" value="{{$emp->city}}"/>
                       </div>
                       @error('city')
                           <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                   </div>
                   <div class="col-lg-6">
                       <span class="pf-title">State</span>
                       <div class="pf-field">
                           <input type="text" name="state" value="{{$emp->state}}" />
                       </div>
                       @error('state')
                           <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                   </div>
                   <div class="col-lg-6">
                       <span class="pf-title">Zip Code</span>
                       <div class="pf-field">
                           <input type="text" name="zip_code" value="{{$emp->zip_code}}"/>
                       </div>
                       @error('zip_code')
                           <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                   </div>
                   <div class="col-lg-6">
                       <span class="pf-title">Website</span>
                       <div class="pf-field">
                           <input type="url" name="website" value="{{$emp->website}}" />
                           <i class="la la-globe"></i>
                       </div>
                       @error('website')
                           <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                   </div>
                   <div class="col-lg-6">
                       <span class="pf-title">LinkedIn</span>
                       <div class="pf-field">
                           <input type="url" name="linkedin" value="{{$emp->linkedin}}" />
                           <i class="la la-linkedin"></i>
                       </div>
                       @error('linkedin')
                           <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                   </div>
                   <div class="col-lg-6">
                       <span class="pf-title">Profile/Logo</span>
                       <div class="pf-field">
                           <input type="file" name="logo" />
                       </div>
                       @error('logo')
                           <div class="alert alert-danger">{{ $message }}</div>
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
@endsection