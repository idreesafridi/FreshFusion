@extends('Admin_Panel.layout.master')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin-category') }}">Categories</a>
	</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')

<!-- Main content -->
<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Category</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('admin-category') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <form action="{{ route('admin-update-category', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ old('name', $category->name) }}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <input type="text" name="description" id="description" class="form-control" placeholder="Description" value="{{ old('description', $category->description) }}">
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-5 pt-3">
                <button class="btn btn-primary">Update</button>
                <a href="{{ route('admin-category') }}" class="btn btn-outline-dark ml-3">Cancel</a>
            </div>
        </div>
    </form>
</section>

@endsection
