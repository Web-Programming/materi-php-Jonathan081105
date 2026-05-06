<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Supplier & Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #0f172a;
        }
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
        .glass {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(250, 204, 21, 0.15);
            border-color: rgba(250, 204, 21, 0.3);
        }
        .glow-text {
            text-shadow: 0 0 30px rgba(250, 204, 21, 0.3);
        }
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: #facc15;
            transition: width 0.3s;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .gradient-border {
            background: linear-gradient(135deg, rgba(250, 204, 21, 0.2), rgba(132, 204, 22, 0.2));
            padding: 1px;
            border-radius: 1rem;
        }
        .gradient-border > div {
            background: #1e293b;
            border-radius: calc(1rem - 1px);
        }
    </style>
</head>
<body class="min-h-screen text-slate-200">
    <!-- Navbar -->
    <nav class="glass fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-lime-500 rounded-xl flex items-center justify-center">
                        <i data-lucide="box" class="w-5 h-5 text-slate-900"></i>
                    </div>
                    <span class="font-poppins text-xl font-bold text-white tracking-tight">SUPPLIER<span class="text-yellow-400">PRO</span></span>
                </div>
                <div class="flex items-center gap-8">
                    <a href="/" class="nav-link text-white font-medium hover:text-yellow-400 transition-colors">Dashboard</a>
                    <a href="/supplier" class="nav-link text-slate-400 font-medium hover:text-yellow-400 transition-colors flex items-center gap-2">
                        <i data-lucide="users" class="w-4 h-4"></i> Data Supplier
                    </a>
                    <a href="/produk" class="nav-link text-slate-400 font-medium hover:text-yellow-400 transition-colors flex items-center gap-2">
                        <i data-lucide="package" class="w-4 h-4"></i> Data Produk
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-28 pb-16 px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Hero Section -->
            <div class="text-center mb-16">
                <h1 class="font-poppins text-5xl lg:text-6xl font-bold text-white mb-6 glow-text">
                    Sistem Manajemen
                </h1>
                <p class="text-slate-400 text-xl max-w-2xl mx-auto">
                    Kelola data supplier dan produk dengan efisiensi tinggi menggunakan dashboard modern
                </p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                <div class="glass rounded-2xl p-6 card-hover">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-yellow-400/10 rounded-xl flex items-center justify-center">
                            <i data-lucide="users" class="w-6 h-6 text-yellow-400"></i>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-white">{{ $totalSupplier }}</p>
                            <p class="text-sm text-slate-400">Total Supplier</p>
                        </div>
                    </div>
                </div>
                <div class="glass rounded-2xl p-6 card-hover">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-lime-500/10 rounded-xl flex items-center justify-center">
                            <i data-lucide="package" class="w-6 h-6 text-lime-400"></i>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-white">{{ $totalProduk }}</p>
                            <p class="text-sm text-slate-400">Total Produk</p>
                        </div>
                    </div>
                </div>
                <div class="glass rounded-2xl p-6 card-hover">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-cyan-400/10 rounded-xl flex items-center justify-center">
                            <i data-lucide="layers" class="w-6 h-6 text-cyan-400"></i>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-white">{{ $totalStok }}</p>
                            <p class="text-sm text-slate-400">Total Stok</p>
                        </div>
                    </div>
                </div>
                <div class="glass rounded-2xl p-6 card-hover">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-purple-400/10 rounded-xl flex items-center justify-center">
                            <i data-lucide="wallet" class="w-6 h-6 text-purple-400"></i>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-white">{{ number_format($nilaiInventori / 1000000, 2) }}M</p>
                            <p class="text-sm text-slate-400">Nilai Inventori</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Cards -->
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Supplier Card -->
                <div class="gradient-border card-hover">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl flex items-center justify-center mb-6">
                            <i data-lucide="users" class="w-8 h-8 text-slate-900"></i>
                        </div>
                        <h3 class="font-poppins text-2xl font-semibold text-white mb-3">Data Supplier</h3>
                        <p class="text-slate-400 mb-8 leading-relaxed">
                            Kelola daftar supplier lengkap dengan informasi kontak, alamat, dan histori transaksi dalam satu dashboard terintegrasi.
                        </p>
                        <a href="/supplier" class="inline-flex items-center gap-2 px-8 py-4 bg-yellow-400 hover:bg-yellow-300 text-slate-900 font-semibold rounded-full transition-all transform hover:scale-105">
                            <span>Lihat Data Supplier</span>
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>

                <!-- Produk Card -->
                <div class="gradient-border card-hover">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-gradient-to-br from-lime-400 to-lime-500 rounded-2xl flex items-center justify-center mb-6">
                            <i data-lucide="package" class="w-8 h-8 text-slate-900"></i>
                        </div>
                        <h3 class="font-poppins text-2xl font-semibold text-white mb-3">Data Produk</h3>
                        <p class="text-slate-400 mb-8 leading-relaxed">
                            Manajemen katalog produk lengkap dengan tracking harga realtime, monitoring stok, dan analisis penjualan terintegrasi.
                        </p>
                        <a href="/produk" class="inline-flex items-center gap-2 px-8 py-4 bg-lime-400 hover:bg-lime-300 text-slate-900 font-semibold rounded-full transition-all transform hover:scale-105">
                            <span>Lihat Data Produk</span>
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-800 mt-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-8">
            <p class="text-center text-slate-500 text-sm">
                © 2026 Sistem Manajemen Olahraga | Crafted for Excellence
            </p>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
