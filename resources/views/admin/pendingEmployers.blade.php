@extends('admin.layout')

@section('title', 'Admin Employers Section')

@section('row')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pending Employers</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Register Date</th>
                                <th>Status</th>
                                <th>Approve</th>
                                <th>Reject</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($emp as $item)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->updated_at->diffForHumans()}}</td>
                                <td>
                                    <span class="badge badge-warning">Pending</span>
                                </td>
                                <td>
                                    <a href="/admin/employers/{{$item->id}}/0"><span class="badge badge-success">Approve</span></a>
                                </td>
                                <td>
                                   <a href="/admin/employers/{{$item->id}}/2"><span class="badge badge-danger">Reject</span></a>
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