@extends('employer.layout')

@section('employer_name', $emp->name)

@section('menu_detail')

<span><img src="/images/employer/{{$emp->logo}}" width="50" height="50" alt="" /> @yield('employer_name') <i class="la la-angle-down"></i></span>
    
@endsection

@section('section')
<div class="col-lg-9 column">
    <div class="padding-left">
        <div class="manage-jobs-sec">
            <h3>View Applications</h3>
            <table>
                <thead>
                    <tr>
                        <td>Title</td>
                        <td>Category</td>
                        <td>View Applications</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($emp->internship as $item)
                    <tr>
                        <td>
                            <div class="table-list-title">
                                <h3><a href="#" title="">{{$item->title}}</a></h3>
                            </div>
                        </td>
                        <td>
                            <span class="applied-field">{{$item->category}}</span>
                        </td>
                        <td>
                            <a href="/employer/applications/view/{{$item->id}}">
                                <button style="float: left; background-color: transparent; border:1px solid purple; color:purple; border-radius:50px;">
                                    View
                                </button>
                            </a>
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
@endsection