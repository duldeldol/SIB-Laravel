<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku - BookSales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">BookSales</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/authors">Authors</a>
                <a class="nav-link active" href="/books">Books</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow-sm border">
            <div class="card-header bg-dark text-white">
                <h4 class="mb-0 fw-bold">Daftar Buku (Books)</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th style="width: 60px;">No</th>
                            <th style="width: 220px;">Judul Buku</th>
                            <th style="width: 200px;">Penulis (Author)</th>
                            <th>Deskripsi</th>
                            <th style="width: 130px;">Harga</th>
                            <th style="width: 90px;">Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($books as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td class="fw-semibold">{{ $item->title }}</td>
                                <td><span class="badge bg-dark">{{ $item->author->name ?? '-' }}</span></td>
                                <td>{{ $item->description }}</td>
                                <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                                <td>{{ $item->stock }} eks</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">Belum ada data buku.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
