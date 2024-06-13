<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h2, h5, h3, p {
            margin-bottom: 0.5rem; /* Mengurangi margin bawah untuk menghindari spasi berlebih */
        }
        .btn-lg {
            padding: 1.25rem 2rem; /* Sesuaikan ukuran tombol */
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
                <p class="mb-3">Jumlah Pemasukan: Rp XXX</p>
                <p class="mb-3">Jumlah Pengeluaran: Rp YYY</p>
                <p class="mb-3">Sisa Saldo: Rp ZZZ</p>
            </div>
        </div>

        <!-- Info Saldo -->
        <div class="row mb-4">
            <div class="col-md-8">
                <h3 class="mb-3">Saldo : Rp ZZZ</h3>
            </div>
        </div>

        <!-- History Transaksi -->
        <div class="row mb-4">
            <div class="col-md-8">
                <h3>History Transaksi</h3>
                <div class="transaction-history">
                    <!-- Contoh satu transaksi -->
                    <div class="transaction-item">
                        <div class="transaction-icon">
                            <!-- Gambar berbentuk bundar -->
                            <img src="path/to/icon.png" alt="Icon Transaksi">
                        </div>
                        <div class="transaction-details">
                            <p>Nama Kategori</p>
                            <p>Nilai: Rp NilaiTransaksi</p>
                        </div>
                    </div>
                    <!-- Ulangi blok ini untuk setiap transaksi -->
                </div>
            </div>
        </div>

        <!-- Tombol Pengeluaran dan Pemasukan -->
        <div class="row">
            <div class="col-md-8">
                <a href="/pengeluaran" class="btn btn-danger btn-lg mb-3 me-3"><i class="fas fa-minus"></i></a>
                <a href="/pemasukan" class="btn btn-success btn-lg mb-3"><i class="fas fa-plus"></i></a>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>