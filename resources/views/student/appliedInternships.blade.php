@extends('student.layout')

@section('student_name', 'Ritik')

@section('menu_detail')

<span><img src="/front/images/resource/mp1.jpg" alt="" /> @yield('student_name') <i class="la la-bars"></i></span>

@endsection

@section('section')

<div class="col-lg-9 column">
    <div class="padding-left">
        <div class="manage-jobs-sec">
            <h3>Manage Jobs</h3>
            <table>
                <thead>
                    <tr>
                        <td>Applied Job</td>
                        <td>Position</td>
                        <td>Date</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($int as $item)
                    <tr>
                        <td>
                            <div class="table-list-title">
                                <i>{{$item->internship_id}}</i><br />
                            </div>
                        </td>
                        <td>
                            <div class="table-list-title">
                                <h3><a href="#" title="">Web Designer / Developer</a></h3>
                            </div>
                        </td>
                        <td>
                            <span>October 27, 2017</span><br />
                        </td>
                        <td>
                            <ul class="action_job">
                                <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach                    
                </tbody>
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