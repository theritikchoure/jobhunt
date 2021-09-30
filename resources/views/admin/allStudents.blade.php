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
                                <th>Name</th>
                                <th>Email</th>
                                <th>LinkedIn Profile</th>
                                <th>Add Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stu as $item)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <td>{{$item->first_name}} {{$item->last_name}}</td>
                                <td>{{$item->email}}</td>
                                <td><a href="{{$item->linkedin}}" class="text text-primary">Profile</a></td>
                                <td>{{$item->updated_at->diffForHumans()}}</td>
                                <td>
                                    <span>
                                        <a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="fa fa-eye text text-primary"></i> 
                                        </a>
                                        <a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="fa fa-trash text text-danger"></i>
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
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/students-export" id="export">
                    <button type="button" class="btn btn-primary">Export <span
                        class="btn-icon-right"><i class="fa fa-file"></i></span>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection