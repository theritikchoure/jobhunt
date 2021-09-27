@extends('employer.layout')

@section('employer_name', $emp->name)

@section('menu_detail')

<span><img src="/images/employer/{{$emp->logo}}" width="50" height="50" alt="" /> @yield('employer_name') <i class="la la-angle-down"></i></span>
    
@endsection

@section('section')

<div class="col-lg-9 column">
    <div class="padding-left">
        <div class="emply-resume-sec">
            <h3>Resume</h3>
            <table>
                @foreach ($int->students as $item)
                <div class="emply-resume-list">
                    <div class="emply-resume-thumb">
                        <img src="/front_assset/images/resource/er1.jpg" alt="" />
                    </div>
                    <div class="emply-resume-info">
                        <h3><a href="#" title="">{{$item->first_name}}</a></h3>
                        <span><i>{{$item->education->degree}}</i> at {{$item->education->college_name}}</span>
                        <p><i class="la la-map-marker"></i>{{$item->address}}</p>
                    </div>
                    <div class="action-resume">
                        <div class="action-center">
                            <span>More.. <i class="la la-angle-down"></i></span>
                            <ul>
                                <li><a href="/resume/student/{{$item->resume}}" target="_blank" title="">Download CV</a></li>
                                <li><a href="{{$item->linkedin}}" target="_blank" title="">Linked-in Profile</a></li>
                                <li><a href="/employer/applications/view/profile/{{$item->id}}" title="">View Profile</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="action-resume">
                        <div class="action-center">
                            <span>Action <i class="la la-angle-down"></i></span>
                            <ul>
                                <li><a href="/employer/applications/view/{{$int->id}}/{{$item->id}}/2" title="">Shortlisted</a></li>
                                <li><a href="/employer/applications/view/{{$int->id}}/{{$item->id}}/0" title="">Rejected</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Emply List -->
                @endforeach
            </table>
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