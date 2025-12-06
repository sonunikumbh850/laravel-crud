<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <!-- Navbar Menu -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <!-- Left side -->
            <a class="navbar-brand" href="/">Product CRUD</a>

            <!-- Toggler for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Right side -->
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto"> <!-- Push items to the right -->
                    <a class="nav-link active" aria-current="page" href="#">Login</a>
                    <a class="nav-link" href="#">Register</a>
                </div>
            </div>

        </div>
    </nav>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>

    @endif

    <!-- Form to add products -->
    <div class="container m-5">
        <h4>Product Edit for ID #{{ $product->id }}</h4>
        <form action="{{ route('Products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="productName" class="form-label">Add Product Name</label>
                <input type="text" class="form-control" id="productName" name="name" placeholder="Ex: iPhone 14 Pro"
                    value="{{ $product->name }}">
            </div>

            <div class="mb-3">
                <label for="productDesc" class="form-label">Description</label>
                <textarea class="form-control" id="productDesc" name="description" rows="5" cols="3"
                    placeholder="Ex: iPhone 14 specification">{{ $product->description }}</textarea>
            </div>


            <div class="mb-3">
                <label for="productImage" class="form-label">Image</label>
                <input type="file" class="form-control" id="productImage" name="images">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>