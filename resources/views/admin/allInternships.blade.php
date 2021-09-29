@extends('admin.layout')

@section('title', 'Admin Internships Section')

@section('row')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Employers</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Add Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($int as $item)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <td>{{$item->title}}</td>
                                <td>{{$item->category}}</td>
                                <td>{{$item->updated_at->diffForHumans()}}</td>
                                <td>
                                    @if ($item->status == 1)
                                    <span class="badge badge-warning">Pending</span>
                                    @elseif($item->status == 0)
                                    <span class="badge badge-success">Approved</span>
                                    @elseif($item->status == 2)
                                    <span class="badge badge-danger">Rejected</span>
                                    @endif
                                </td>
                                <td>
                                    <span>
                                        <a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="fa fa-eye color-success"></i> 
                                        </a>
                                        <a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="fa fa-trash color-danger"></i>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection