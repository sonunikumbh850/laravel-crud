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

    <!-- Form to add products -->
    <div class="container m-5">
        <div class="d-flex justify-content-end">
            <a class="btn btn-primary" href="/create" role="button">Add Product</a>
        </div>
        <div class="container mt-5">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Product List
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $product->name }}</td>
                                   <td style="width: 25%;">{{ $product->description }}</td>
                                    <td>
                                        <img src="/images/{{ $product->images }}" class="rounded-circle" width="50"
                                            height="50" alt="Image">
                                    </td>
                                    <td> <a class="btn btn-secondary" href="{{ $product->id }}/edit" role="button">Edit</a>
                                    </td>
                                    <td><a class="btn btn-danger" href="{{ $product->id }}/delete" role="button">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>