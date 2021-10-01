@extends('admin.layout')

@section('title', 'Admin Category')

@section('row')

<div class="row">
    <div class="col-xl-6 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Categories</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    @foreach ($category as $item)
                    <br>
                    <form method="POST" action="/admin/categories/edit/{{$item->id}}">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>#{{ $loop->iteration}}  Category Name</label>
                                <input type="text" class="form-control" name="name" value="{{$item->name}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Category Slug</label>
                                <input type="text" class="form-control" name="slug" value="{{$item->slug}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="/admin/categories/delete/{{$item->id}}" class="btn btn-danger ml-2">Delete</a>
                            @if ($item->status == 1)
                            <a href="/admin/categories/status/{{$item->id}}/0" class="btn btn-success ml-2">Activated</a>
                            @else
                            <a href="/admin/categories/status/{{$item->id}}/1" class="btn btn-warning ml-2">Deactivated</a>
                            @endif
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Category</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="/admin/categories" method="POST">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Ex. Campus Ambassador" value="{{old('names')}}">
                                @error('name') <div class="text text-danger mt-1">{{ $message }}</div> @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>Category Slug</label>
                                <input type="text" class="form-control" name="slug" placeholder="Ex. campus-ambassador" value="{{old('slug')}}">
                                @error('slug') <div class="text text-danger mt-1">{{ $message }}</div> @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection