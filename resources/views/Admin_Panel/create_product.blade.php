@extends('Admin_Panel.layout.master')
@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin-product') }}">Products</a>
	</li>
    <li class="breadcrumb-item active">Create</li>
@endsection
@section('content')
<style>
    .upload-label {
        display: inline-block;
        cursor: pointer;
        color: #333;
        font-weight: 600;
        padding: 20px;
        border: 2px dashed #ced4da;
        border-radius: 8px;
        background-color: #f9f9f9;
    }

    .upload-label input[type="file"] {
        display: none;
    }

    .preview-container {
        position: relative;
        display: inline-block;
    }

    .preview-container img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 8px;
        border: 2px solid #ddd;
        box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
    }

    .remove-btn {
        position: absolute;
        top: -8px;
        right: -8px;
        background: #dc3545;
        color: #fff;
        border: none;
        border-radius: 50%;
        width: 25px;
        height: 25px;
        font-size: 16px;
        line-height: 25px;
        text-align: center;
        cursor: pointer;
    }

</style>
<!-- Main content -->
<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Product</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('admin-product') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<section class="content">
    <!-- Default box -->
    <form action="{{ route('admin-store-product') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="description">Description</label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="summernote" placeholder="Description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Media</h2>
                            <div class="custom-dropzone text-center">
                                <label for="fileUpload" id="upload-label" class="upload-label">
                                    <strong>Drop files here or click to upload</strong><br>
                                    <input type="file" name="file" id="fileUpload" accept="image/*">
                                </label>
                                <div id="preview-container" class="preview-container mt-3 d-none"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Pricing</h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="price">Price</label>
                                        <input type="text" name="price" id="price" class="form-control" placeholder="Price">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="compare_price">Compare at Price</label>
                                        <input type="text" name="compare_price" id="compare_price" class="form-control" placeholder="Compare Price">
                                        <p class="text-muted mt-3">
                                            To show a reduced price, move the product’s original price into Compare at price. Enter a lower value into Price.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Inventory</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="sku">SKU (Stock Keeping Unit)</label>
                                        <input type="text" name="sku" id="sku" class="form-control" placeholder="sku">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="barcode">Barcode</label>
                                        <input type="text" name="barcode" id="barcode" class="form-control" placeholder="Barcode">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="track_qty" name="track_qty" checked>
                                            <label for="track_qty" class="custom-control-label">Track Quantity</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="number" min="0" name="qty" id="qty" class="form-control" placeholder="Qty">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Product status</h2>
                            <div class="mb-3">
                                <select name="status" id="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Block</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2 class="h4  mb-3">Product category</h2>
                            <div class="mb-3">
                                <label for="category">Category</label>
                                <select name="category_id" id="category" class="form-control">
                                    <option value="">-- Select Category --</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pb-5 pt-3">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('admin-product') }}" class="btn btn-outline-dark ml-3">Cancel</a>
            </div>
        </div>
    </form>
    <!-- /.card -->

    <script>
        const fileInput = document.getElementById('fileUpload');
        const previewContainer = document.getElementById('preview-container');
        const uploadLabel = document.getElementById('upload-label');

        fileInput.addEventListener('change', function () {
            const file = this.files[0];

            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewContainer.innerHTML = `
                        <img src="${e.target.result}" alt="Preview">
                        <button type="button" class="remove-btn" onclick="removeImage()">×</button>
                    `;
                    previewContainer.classList.remove('d-none');
                    uploadLabel.style.display = 'none';
                };
                reader.readAsDataURL(file);
            }
        });

        function removeImage() {
            fileInput.value = '';
            previewContainer.innerHTML = '';
            previewContainer.classList.add('d-none');
            uploadLabel.style.display = 'inline-block';
        }
    </script>


</section>
<!-- /.content -->
@endsection
