@extends('admin.adminmaster')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-2">Create Product</h5>
                <form enctype="multipart/form-data" action="{{ route('admin-product-store') }}" method='POST'>
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input name="price" type="text" class="form-control" id="price">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Image</label>
                        <input name='image' class="form-control" type="file" id="formFile">
                    </div>
                    <button type="submit" class="btn btn-primary">Create Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection

