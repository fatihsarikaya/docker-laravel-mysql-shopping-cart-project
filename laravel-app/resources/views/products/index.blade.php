<!DOCTYPE html>
<html>
<head>
    <title>Laravel Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .product-item {
            width: 33.33%;
            float: left;
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Products</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <h2>Your Cart</h2>
            @if(session('cart'))
                <ul class="list-group">
                    @foreach(session('cart') as $id => $details)
                        <li class="list-group-item">
                            <span class="badge">{{ $details['quantity'] }}</span>
                            {{ $details['name'] }} - ${{ $details['price'] }}
                            <a href="{{ route('products.removeFromCart', $id) }}" class="btn btn-danger btn-xs pull-right">Remove</a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>Your cart is empty</p>
            @endif

            <h2>All Products</h2>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 product-item">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>{{ $product->name }}</h3>
                                <p>{{ $product->description }}</p>
                                <p><strong>Price: </strong> {{ $product->price }}</p>
                                <p>
                                    <a href="{{ route('products.addToCart', $product->id) }}" class="btn btn-primary">Add to Cart</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</body>
</html>
