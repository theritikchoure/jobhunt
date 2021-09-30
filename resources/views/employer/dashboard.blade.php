@extends('employer.layout')

@section('employer_name', $emp->name)

@section('menu_detail')

<span><img src="/images/employer/{{$emp->logo}}" width="50" height="50" alt="" /> @yield('employer_name') <i class="la la-angle-down"></i></span>
    
@endsection

@section('section')
<div class="col-lg-9 column">
    <div class="padding-left">
        <div class="manage-jobs-sec">
            <h3>Dashboard</h3>
            <div class="extra-job-info">
                <span><i class="la la-clock-o"></i><strong>{{$emp->internship->count()}}</strong> Job Posted</span>
                <span><i class="la la-users"></i><strong>{{$emp->internship->where('status', 0)->count()}}</strong> Active Jobs</span>
                <span><i class="la la-users"></i><strong>{{$emp->internship->where('status', 2)->count()}}</strong> Rejected Jobs</span>
            </div>
            <table>
                <thead>
                    <tr>
                        <td>Title</td>
                        <td>Category</td>
                        <td>Created </td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($emp->internship->whereNotIn('status', 5) as $item)
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
                            <span>{{$item->created_at->diffForHumans()}}</span><br />
                        </td>
                        <td>
                            @if ($item->status == 1)
                                <span class="status">Pending</span>
                            @elseif($item->status == 0)
                                <span class="status active">Active</span>
                            @else
                                <span class="text text-danger">Rejected</span>
                            @endif
                        </td>
                        <td>
                            <ul class="action_job">
                                <li><span>View Job</span><a href="/internships/details/{{$item->id}}" target="_blank" title=""><i class="la la-eye"></i></a></li>
                                <li><span>Edit</span><a href="/employer/internships/edit/{{$item->id}}" title=""><i class="la la-pencil"></i></a></li>
                                <li><span>Delete</span><a href="/employer/internships/delete/{{$item->id}}" onclick="alert('Are You Sure You want delete this internship')" title=""><i class="la la-trash-o"></i></a></li>
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
@endsection