@extends('employer.layout')

@section('employer_name', $emp->name)

@section('menu_detail')

<span>@yield('employer_name') <i class="la la-angle-down"></i></span>
    
@endsection

@section('section')
<div class="col-lg-9 column">
    <div class="padding-left">
        <div class="manage-jobs-sec">
            <h3>Edit Internship</h3>
        </div>
        <div class="profile-form-edit">
            <form action="" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-12">
                        <span class="pf-title">Job Title</span>
                        <div class="pf-field">
                            <input type="text" name="title" placeholder="Designer" value="{{$int->title}}" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <span class="pf-title">Description</span>
                        <div class="pf-field">
                            <textarea name="description">{{$int->description}}
                            </textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Categories</span>
                        <div class="pf-field">
                            <select data-placeholder="Please Select Specialism" name="category" class="chosen">
                               <option>Select Internship Category</option>
                               <option value="Web Designing">Web Designing</option>
                               <option value="Art & Culture">Art & Culture</option>
                               <option value="Reading & Writing">Reading & Writing</option>
                           </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Offerd Salary</span>
                        <div class="pf-field">
                            <input type="text" name="salary" placeholder="Eg. 5000" value="{{$int->salary}}"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="pf-title">No. of Positions</span>
                        <div class="pf-field">
                            <input type="number" name="openings" placeholder="1" min="1" value="{{$int->openings}}"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Duration (In Months)</span>
                        <div class="pf-field">
                            <input type="number" name="duration" placeholder="1" min="1" value="{{$int->duration}}" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <span class="pf-title">Application Deadline Date</span>
                        <div class="pf-field">
                            <input type="date" name="last_date" placeholder="01.11.207" value="{{$int->last_date}}"  class="form-control datepicker" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <span class="pf-title">Perks</span>
                        <div class="row" style="font-size: 14px;">
                            <div class="col-sm-6">
                                @if ($int->perk->perk1 == '0')
                                <input type="checkbox" id="perk1" name="perk1" value="Certificate">
                                <label for="perk1"> Certificate</label><br>
                                @else
                                <input type="checkbox" id="perk1" name="perk1" checked value="Certificate">
                                <label for="perk1"> Certificate</label><br>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                @if ($int->perk->perk2 == '0')
                                <input type="checkbox" id="perk2" name="perk2" value="Certificate">
                                <label for="perk2"> Letter of recommendation</label><br>
                                @else
                                <input type="checkbox" id="perk2" name="perk2" checked value="Certificate">
                                <label for="perk2"> Letter of recommendation</label><br>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                @if ($int->perk->perk3 == '0')
                                <input type="checkbox" id="perk3" name="perk3" value="Certificate">
                                <label for="perk3"> Flexible work hours</label><br>
                                @else
                                <input type="checkbox" id="perk3" name="perk3" checked value="Certificate">
                                <label for="perk3"> Flexible work hours</label><br>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                @if ($int->perk->perk4 == '0')
                                <input type="checkbox" id="perk4" name="perk4" value="Certificate">
                                <label for="perk4"> 5 days a week</label><br>
                                @else
                                <input type="checkbox" id="perk4" name="perk4" checked value="Certificate">
                                <label for="perk4"> 5 days a week</label><br>
                                @endif
                            </div>
                        </div>
                    </div>    
                    <div class="col-lg-12" style="margin-bottom:25px;">
                        <button type="submit">Update Intenship</button>
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