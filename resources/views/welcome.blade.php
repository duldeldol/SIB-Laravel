<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem BookSales - MVC Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">BookSales</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/genres">Genres</a>
                <a class="nav-link" href="/authors">Authors</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border text-center">
            <h1 class="display-5 fw-bold text-dark">BookSales MVC System</h1>
            <p class="lead text-muted mt-3">
                Implementasi pola Model-View-Controller (MVC) sederhana pada framework Laravel.
            </p>
            <hr class="my-4">

            <div class="row g-4 mt-2 text-start">
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border">
                        <div class="card-body">
                            <h5 class="card-title text-dark fw-bold">Tabel Genre</h5>
                            <a href="/genres" class="btn btn-dark btn-sm mt-3">Buka Halaman Genre &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border">
                        <div class="card-body">
                            <h5 class="card-title text-dark fw-bold">Tabel Author</h5>
                            <a href="/authors" class="btn btn-dark btn-sm mt-3">Buka Halaman Author &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
