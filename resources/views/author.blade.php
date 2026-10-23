<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penulis - BookSales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">BookSales</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/genres">Genres</a>
                <a class="nav-link active" href="/authors">Authors</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow-sm border">
            <div class="card-header bg-dark text-white">
                <h4 class="mb-0 fw-bold">Daftar Penulis (Authors)</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th style="width: 80px;">No</th>
                            <th style="width: 220px;">Nama Penulis</th>
                            <th style="width: 200px;">File Foto</th>
                            <th>Biografi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($authors as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td class="fw-semibold">{{ $item['name'] }}</td>
                                <td><code>{{ $item['photo'] }}</code></td>
                                <td>{{ $item['bio'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
