<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Product Details</title>
</head>
<body class="py-4">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">{{ $product->name }}</h1>
                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text"><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                <p class="card-text"><strong>Stock:</strong> {{ number_format($product->stock) }}</p>
                <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Back to List</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>