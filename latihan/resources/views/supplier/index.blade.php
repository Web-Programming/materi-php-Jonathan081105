<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Supplier - Sistem Supplier & Produk</title>
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
        .table-row:hover {
            background: rgba(250, 204, 21, 0.05);
        }
        /* Pagination Dark Mode */
        .pagination {
            display: flex;
            list-style: none;
            gap: 0.5rem;
        }
        .pagination li a, .pagination li span {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 2.5rem;
            height: 2.5rem;
            padding: 0 0.75rem;
            border-radius: 0.5rem;
            background: rgba(30, 41, 59, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #94a3b8;
            font-size: 0.875rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s;
        }
        .pagination li a:hover {
            background: rgba(250, 204, 21, 0.1);
            border-color: rgba(250, 204, 21, 0.3);
            color: #facc15;
        }
        .pagination li.active span {
            background: #facc15;
            border-color: #facc15;
            color: #0f172a;
            font-weight: 600;
        }
        .pagination li.disabled span {
            opacity: 0.4;
            cursor: not-allowed;
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
                    <a href="/" class="nav-link text-slate-400 font-medium hover:text-yellow-400 transition-colors">Dashboard</a>
                    <a href="/supplier" class="nav-link text-white font-medium hover:text-yellow-400 transition-colors flex items-center gap-2">
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
            <!-- Page Header -->
            <div class="glass rounded-2xl p-8 mb-8">
                <div class="flex items-center gap-4 mb-2">
                    <div class="w-12 h-12 bg-yellow-400/10 rounded-xl flex items-center justify-center">
                        <i data-lucide="users" class="w-6 h-6 text-yellow-400"></i>
                    </div>
                    <div>
                        <h1 class="font-poppins text-3xl font-bold text-white">Data Supplier</h1>
                        <p class="text-slate-400">Daftar lengkap supplier yang terdaftar dalam sistem</p>
                    </div>
                </div>
            </div>

            <!-- Table Card -->
            <div class="glass rounded-2xl overflow-hidden">
                <div class="p-6 border-b border-slate-700/50">
                    <button class="inline-flex items-center gap-2 px-6 py-3 bg-yellow-400 hover:bg-yellow-300 text-slate-900 font-semibold rounded-full transition-all">
                        <i data-lucide="plus" class="w-5 h-5"></i>
                        <span>Tambah Supplier Baru</span>
                    </button>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-slate-800/50">
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-300">No</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-300">Nama Supplier</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-300">Nomor Telepon</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-300">Alamat</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-slate-300">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-700/50">
                            @foreach($suppliers as $index => $supplier)
                            <tr class="table-row transition-colors">
                                <td class="px-6 py-4 text-slate-400">{{ $index + 1 }}</td>
                                <td class="px-6 py-4">
                                    <span class="text-white font-medium">{{ $supplier->nama }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-2 px-3 py-1 bg-cyan-400/10 text-cyan-400 rounded-full text-sm">
                                        <i data-lucide="phone" class="w-4 h-4"></i>
                                        {{ $supplier->telepon }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-2 text-slate-400">
                                        <i data-lucide="map-pin" class="w-4 h-4 text-lime-400"></i>
                                        {{ $supplier->alamat }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <button class="p-2 bg-yellow-400/10 hover:bg-yellow-400/20 text-yellow-400 rounded-lg transition-colors">
                                            <i data-lucide="edit-2" class="w-4 h-4"></i>
                                        </button>
                                        <button class="p-2 bg-red-400/10 hover:bg-red-400/20 text-red-400 rounded-lg transition-colors">
                                            <i data-lucide="trash-2" class="w-4 h-4"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class="p-6 border-t border-slate-700/50">
                    {{ $suppliers->links() }}
                </div>
            </div>

            <!-- Back Link -->
            <div class="mt-8">
                <a href="/" class="inline-flex items-center gap-2 text-slate-400 hover:text-yellow-400 transition-colors">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    <span>Kembali ke Dashboard</span>
                </a>
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
