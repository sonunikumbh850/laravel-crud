<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar Menu -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <a class="navbar-brand" href="/">Product CRUD</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="/auth/login">Login</a>
                    <a class="nav-link active" href="/auth/register">Register</a>
                </div>
            </div>

        </div>
    </nav>

    <!-- Registration Form -->
    <div class="container mt-5" style="max-width: 700px;">
        <h4 class="mb-4 text-center">REGISTRATION</h4>

        <form class="row g-3 needs-validation" novalidate method="POST" action="/auth/register">
            @csrf

            <!-- First Name -->
            <div class="col-md-6">
                <label class="form-label">First name</label>
                <input type="text" class="form-control" name="first_name" required>
                <div class="invalid-feedback">First name is required.</div>
            </div>

            <!-- Last Name -->
            <div class="col-md-6">
                <label class="form-label">Last name</label>
                <input type="text" class="form-control" name="last_name" required>
                <div class="invalid-feedback">Last name is required.</div>
            </div>

            <!-- Email -->
            <div class="col-md-12">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
                <div class="invalid-feedback">Please enter a valid email.</div>
            </div>

            <!-- Password -->
            <div class="col-md-6">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required minlength="6">
                <div class="invalid-feedback">Password must be at least 6 characters.</div>
            </div>

            <!-- Confirm Password -->
            <div class="col-md-6">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" required minlength="6">
                <div class="invalid-feedback">Please confirm your password.</div>
            </div>

            <!-- Submit -->
            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Register</button>
            </div>

        </form>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Validation Script -->
    <script>
        (() => {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')

            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

</body>

</html>
