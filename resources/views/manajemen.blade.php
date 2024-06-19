<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f8f9fa;
    color: #343a40;
}
h2, h3, h5, p {
    margin-bottom: 0.5rem; /* Mengurangi margin bawah untuk menghindari spasi berlebih */
}
.btn-lg {
    padding: 0.5rem 1rem; /* Mengurangi ukuran tombol lebih lanjut */
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
}
th, td {
    padding: 0.75rem;
    text-align: left;
    border-bottom: 1px solid #dee2e6;
}
th {
    background-color: #e9ecef;
}
tr:hover {
    background-color: #f1f1f1;
}
.btn {
    margin-right: 0.5rem;
}
.btn:hover {
    opacity: 0.8;
}
.container {
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 0.5rem;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Ringkasan -->
        <div class="row mb-4">
            <div class="col-md-8">
                <h2 class="mb-3">Ringkasan</h2>
                <h5 class="mb-3">{{ date('F Y') }}</h5>
                <p class="mb-3">Jumlah Pemasukan: Rp 5.000.000</p>
                <p class="mb-3">Jumlah Pengeluaran: Rp 500.000</p>
                <p class="mb-3">Sisa Saldo: Rp 4.500.000</p>
            </div>
        </div>

        <!-- Info Saldo -->
        <div class="row mb-4">
            <div class="col-md-8">
                <h3 class="mb-3">Saldo : Rp 4.500.000</h3>
            </div>
        </div>

        <!-- History Transaksi -->
        <h2>History Transaksi</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pemasukan</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pemasukan as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->jumlah_pemasukan }}</td>
                    <td>{{ $item->id_kategori }}</td>
                    <td>{{ $item->tanggal_pemasukan }}</td>
                    <td>{{ $item->deskripsi_pemasukan }}</td>
                </tr>
                @endforeach
            </tbody>

            <thead>
                <tr>
                    <th>No</th>
                    <th>Pengeluaran</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $pengeluaran as $item )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item ->jumlah_pengeluaran }}</td>
                    <td>{{ $item ->id_kategori}}</td>
                    <td>{{ $item ->tanggal_pengeluaran }}</td>
                    <td>{{ $item ->deskripsi_pengeluaran }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <!-- Tombol Pengeluaran dan Pemasukan -->
        <div class="row mt-4">
            <div class="col-md-8">
                <a href="/pengeluaran" class="btn btn-danger btn-lg">Pengeluaran</a>
                <a href="/pemasukan" class="btn btn-success btn-lg">Pemasukan</a>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
