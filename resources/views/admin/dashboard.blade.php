@extends('admin.layout')

@section('title', 'Admin Dashboard')

@section('row')
<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text">Total Employers</div>
                    <div class="stat-digit"> <i class="fa fa-users"></i>{{App\Models\Employer::whereNotIn('status', [1])->count()}}</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text">Total Internships</div>
                    <div class="stat-digit"> <i class="fa fa-tag"></i>{{App\Models\Internship::whereNotIn('status', [1])->count()}}</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text">Total Students</div>
                    <div class="stat-digit"> <i class="fa fa-user"></i>{{App\Models\Student::all()->count()}}</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text">Categories</div>
                    <div class="stat-digit"> <i class="fa fa-check-square"></i>{{App\Models\Category::where('status', [1])->count()}}</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">New Employers</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Product</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($emp as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td><span>{{$item->email}}</span></td>
                                    <td>
                                        @if ($item->status == 1)
                                        <span class="badge badge-warning">Pending</span>
                                        @elseif($item->status == 0)
                                        <span class="badge badge-success">Approved</span>
                                        @elseif($item->status == 2)
                                        <span class="badge badge-danger">Rejected</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">New Internships</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Last Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($int as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->title}}</td>
                                    <td><span>{{$item->category}}</span></td>
                                    <td><span>{{$item->last_date}}</span></td>
                                    <td>
                                        @if ($item->status == 1)
                                        <span class="badge badge-warning">Pending</span>
                                        @elseif($item->status == 0)
                                        <span class="badge badge-success">Approved</span>
                                        @elseif($item->status == 2)
                                        <span class="badge badge-danger">Rejected</span>
                                        @endif
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
