@extends('employer.layout')

@section('employer_name', $emp->name)

@section('menu_detail')

<span><img src="/images/employer/{{$emp->logo}}" width="50" height="50" alt="" /> @yield('employer_name') <i class="la la-angle-down"></i></span>
    
@endsection

@section('section')
<div class="col-lg-9 column">
    <div class="padding-left">
        <div class="profile-title">
            <h3>Post a New Internship</h3>
            <div class="steps-sec">
                <div class="step active" style="margin-left: 31%;">
                    <p><i class="la la-info"></i></p>
                    <span>Information</span>
                </div>
                
            </div>
        </div>
        <div class="profile-form-edit">
            <form action="{{route('employer.postinternshipform.post')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <span class="pf-title">Job Title</span>
                        <div class="pf-field">
                            <input type="text" name="title" placeholder="Designer" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <span class="pf-title">Description</span>
                        <div class="pf-field">
                            <textarea name="description" id="description">Selected intern's day-to-day responsibilities include: 

1.
2.
3.
                            </textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Categories</span>
                        <div class="pf-field">
                            <select data-placeholder="Please Select Specialism" name="category" class="chosen">
                               <option>Select Internship Category</option>
                               @foreach ($cat as $cat)
                                    <option value="{{$cat->name}}">{{$cat->name}}</option>
                               @endforeach
                           </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Offerd Salary</span>
                        <div class="pf-field">
                            <input type="text" name="salary" placeholder="Eg. 5000" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="pf-title">No. of Positions</span>
                        <div class="pf-field">
                            <input type="number" name="openings" placeholder="1" min="1" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="pf-title">Duration (In Months)</span>
                        <div class="pf-field">
                            <input type="number" name="duration" placeholder="1" min="1" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <span class="pf-title">Application Deadline Date</span>
                        <div class="pf-field">
                            <input type="date" name="last_date" placeholder="01.11.207"  class="form-control datepicker" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <span class="pf-title">Perks</span>
                        <div class="row" style="font-size: 14px;">
                            <div class="col-sm-6">
                                <input type="checkbox" id="perk1" name="perk1" value="Certificate">
                                <label for="perk1"> Certificate</label><br>
                            </div>
                            <div class="col-sm-6">
                                <input type="checkbox" id="perk2" name="perk2" value="Letter of recommendation">
                                <label for="perk2"> Letter of recommendation</label><br>
                            </div>
                            <div class="col-sm-6">
                                <input type="checkbox" id="perk3" name="perk3" value="Flexible work hours">
                                <label for="perk3"> Flexible work hours</label><br>
                            </div>
                            <div class="col-sm-6">
                                <input type="checkbox" id="perk4" name="perk4" value="5 days a week">
                                <label for="perk4"> 5 days a week</label><br>
                            </div>
                        </div>
                    </div>    
                    <div class="col-lg-12" style="margin-bottom:25px;">
                        @if ($emp->status == 0)
                            <button type="submit">Post Intenship</button>
                        @else
                            <button disabled>Not Allow to Post</button>
                        @endif
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
            "progressBar" : true,
            "closeDuration" : 300,
        }
                toastr.success("{{ session('success') }}");
    </script>
@endif

<script>
    tinymce.init({
        selector: 'textarea#description',
        height: 500,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });

</script>
@endsection