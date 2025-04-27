@extends('Admin_Panel.layout.master')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('admin-product') }}">Products</a>
    </li>
    <li class="breadcrumb-item active">Edit Product</li>
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
                <h1>Edit Products</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('admin-product') }}" class="btn btn-primary">Product</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <form action="{{ route('admin-update-product', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') {{-- Required for updating in Laravel --}}

            <div class="card">
                <div class="card-body row">
                    <div class="col-md-6 mb-3">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ $product->title }}" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>SKU</label>
                        <input type="text" name="sku" value="{{ $product->sku }}" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Price</label>
                        <input type="number" name="price" value="{{ $product->price }}" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Quantity</label>
                        <input type="number" name="qty" value="{{ $product->qty }}" class="form-control" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label>Description</label>
                        <textarea name="description" class="form-control summernote" rows="6">{{ $product->description }}</textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Status</label>
                        <select name="status" class="form-control" required>
                            <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="image" class="form-label">Change Product Image</label>
                        <div class="input-group">
                            <input type="file" name="file" id="image" class="form-control" accept="image/*">
                        </div>
                        @if($product->productattachments)
                            <div class="mt-2">
                                <img src="{{ asset('backend/' . $product->productattachments->file_path) }}" alt="Product Image" width="80" class="img-thumbnail">
                            </div>
                        @endif
                    </div>
                </div>

                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </div>
            </div>
        </form>
    </div>
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
@endsection
