@extends('pages.layout')

@section('page_title', 'Register')
    

@section('section')

<section>
		<div class="block no-padding">
			<div class="container">
				 <div class="row no-gape">
                    <div class="col-lg-2"></div>
				 	<div class="col-lg-8 column">
				 		<div class="padding-left">
					 		<div class="profile-title">
					 			<h3>Register as an Student</h3>
					 		</div>
					 		<div class="profile-form-edit">
					 			<form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
					 				<div class="row">
                                        <div class="col-lg-6">
                                            <span class="pf-title">First Name</span>
                                            <div class="pf-field">
                                                <input type="text" name="first_name" placeholder="John" />
                                            </div>
                                            @error('first_name')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Last Name</span>
                                            <div class="pf-field">
                                                <input type="text" name="last_name" placeholder="Doe" />
                                            </div>
                                            @error('last_name')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Email ID</span>
					 						<div class="pf-field">
					 							<input type="email" name="email" placeholder="john@doe.com" />
					 						</div>
                                            @error('email')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Contact Number</span>
					 						<div class="pf-field">
					 							<input type="text" name="mobile" placeholder="9285471584" />
					 						</div>
                                            @error('mobile')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
					 					</div>
					 					<div class="col-lg-6">
                                            <span class="pf-title">Password</span>
                                            <div class="pf-field">
                                                <input type="password" name="password" placeholder="**************" />
                                            </div>
                                            @error('password')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Confirm Password</span>
                                            <div class="pf-field">
                                                <input type="password" name="password_confirmation" placeholder="**************" />
                                            </div>
                                            @error('password_confirmation')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Address</span>
                                            <div class="pf-field">
                                                <input type="text" name="address" placeholder="HIG-87, Collins Street West, Bhopal, MP, India" />
                                                <i class="la la-map-marker"></i>
                                            </div>
                                            @error('address')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">LinkedIn</span>
                                            <div class="pf-field">
                                                <input type="url" name="linkedin" placeholder="www.Linkedin.com/JohnDoe" />
                                                <i class="la la-linkedin"></i>
                                            </div>
                                            @error('linkedin')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h5>Education Details</h5>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">College Name</span>
                                            <div class="pf-field">
                                                <input type="text" name="college_name" placeholder="University Institute of Technology, RGPV" />
                                            </div>
                                            @error('college_name')
                                                <div class="text text-danger">{{ $message }}</div>
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
                                                <input type="text" name="branch" placeholder="IT" />
                                            </div>
                                            @error('branch')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Pass Out</span>
                                            <div class="pf-field">
                                                <input type="date" name="pass_year" placeholder="" />
                                            </div>
                                            @error('pass_year')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h5>Extra Details</h5>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Profile Image</span>
                                            <div class="pf-field">
                                                <input type="file" name="image" />
                                            </div>
                                            @error('image')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Resume</span>
                                            <div class="pf-field">
                                                <input type="file" name="resume" />
                                            </div>
                                            @error('resume')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div> 
                                        <div class="col-lg-12">
                                            <button type="submit" style="margin-bottom: 25px;">Register</button>
                                        </div>
					 				</div>
					 			</form>
					 		</div>
					 	</div>
					</div>
                    <div class="col-lg-2"></div>
				 </div>
			</div>
		</div>
	</section>

@endsection