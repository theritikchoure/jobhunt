@extends('admin.layout')

@section('title', 'Admin Profile')

@section('row')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Change Login URL</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="/admin/profile/change-login-url" method="post" class="form-inline">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <input type="text" readonly class="form-control-plaintext" value="{{$login->login}}">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <label class="sr-only">Password</label>
                            <input type="text" name="login" class="form-control" placeholder="custom-url">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Change Login URL</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection