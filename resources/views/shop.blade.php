@foreach($products as $product)
<div class="col-12 col-md-4 col-lg-3 mb-5">
    <a class="product-item" href="#">
        <img src="{{ asset($product->image) }}" class="img-fluid product-thumbnail">
        <h3 class="product-title">{{ $product->name }}</h3>
        <strong class="product-price">${{ $product->price }}</strong>
    </a>
</div>
@endforeach
