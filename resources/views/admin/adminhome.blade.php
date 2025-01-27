@extends('admin.adminmaster')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="{{route('admin-product-create')}}" class='btn btn-primary'>Add New Product</a>
        </div>
    </div>
    <div class="row">
        <div class="col">

        </div>
    </div>
    <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">View by page title and screen class</h5>
          <div class="table-responsive">
            <table class="table text-nowrap align-middle mb-0">
                <thead>

                    <tr class="border-2 border-bottom border-primary border-0">
                        <th scope="col" class="text-center">Id</th>
                        <th scope="col" class="text-center">Image</th>

                        <th scope="col" class="text-center">Name</th>

                        <th scope="col" class="text-center">Price</th>
                          <th scope="col" class="text-center">Created At</th> 
                     <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>

            <tbody>
                @foreach ($products as $product)
                <tr class="border-2 border-bottom border-primary border-0">
                    <th scope="col" class="text-center">{{$product->id}}</th>
                    <th scope="col" class="text-center"><img src="{{ asset('images/'. $product->image)  }}" alt="{{ $product->name }}" width="50"></th>

                    <th scope="col" class="text-center">{{$product->Name}}</th>

                    <th scope="col" class="text-center">{{$product->Price}}</th>
                    <th scope="col" class="text-center">{{$product->created_at}}</th>
                    <th scope="col" class="text-center">Action</th>
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
