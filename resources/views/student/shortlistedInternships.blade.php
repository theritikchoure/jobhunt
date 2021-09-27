@extends('student.layout')

@section('student_name', 'Ritik')

@section('menu_detail')

<span><img src="/front_asset/images/resource/mp1.jpg" alt="" /> @yield('student_name') <i class="la la-bars"></i></span>

@endsection

@section('section')

<div class="col-lg-9 column">
    <div class="padding-left">
        <div class="manage-jobs-sec">
            <h3>Short Listed Jobs</h3>
            <table>
                <thead>
                    <tr>
                        <td>Applied Job</td>
                        <td>Compnay Name</td>
                        <td>Delete Application</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stu->shortinternships as $item)
                    <tr>
                        <td>
                            <div class="table-list-title">
                                <h6 style="color:#8b91dd;">{{$item->title}}</h6>
                            </div>
                        </td>
                        <td>
                            <div class="table-list-title">
                                <h6><a href="#" title="">Digital Ritik</a></h6>
                            </div>
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