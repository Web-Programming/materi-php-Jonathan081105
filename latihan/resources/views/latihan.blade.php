<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5em;
        }
        .section {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 5px solid #667eea;
        }
        .section h2 {
            color: #667eea;
            margin-bottom: 15px;
        }
        .code-block {
            background: #2d3748;
            color: #e2e8f0;
            padding: 15px;
            border-radius: 8px;
            font-family: 'Courier New', monospace;
            overflow-x: auto;
        }
        .result {
            background: #e6fffa;
            border: 2px solid #38b2ac;
            padding: 15px;
            border-radius: 8px;
            margin-top: 10px;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #667eea;
            text-decoration: none;
            font-weight: bold;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Latihan PHP</h1>

        <div class="section">
            <h2>1. Variabel dan Tipe Data</h2>
            <div class="code-block">
                <?php
                $nama = "Jonathan";
                $umur = 20;
                $nilai = 85.5;
                $isActive = true;
                ?>
            </div>
            <div class="result">
                <p><strong>Nama:</strong> {{ $nama ?? 'Jonathan' }}</p>
                <p><strong>Umur:</strong> {{ $umur ?? 20 }} tahun</p>
                <p><strong>Nilai:</strong> {{ $nilai ?? 85.5 }}</p>
                <p><strong>Status:</strong> {{ ($isActive ?? true) ? 'Aktif' : 'Nonaktif' }}</p>
            </div>
        </div>

        <div class="section">
            <h2>2. Array</h2>
            <div class="code-block">
                <?php
                $buah = ["Apel", "Mangga", "Jeruk", "Pisang"];
                $mahasiswa = [
                    "nama" => "Jonathan",
                    "nim" => "123456",
                    "jurusan" => "Teknik Informatika"
                ];
                ?>
            </div>
            <div class="result">
                <p><strong>Daftar Buah:</strong></p>
                <ul>
                    @foreach(['Apel', 'Mangga', 'Jeruk', 'Pisang'] as $b)
                        <li>{{ $b }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="section">
            <h2>3. Percabangan (if-else)</h2>
            <div class="code-block">
                <?php
                $nilaiUjian = 75;
                if ($nilaiUjian >= 80) {
                    $status = "Lulus dengan Nilai Baik";
                } elseif ($nilaiUjian >= 60) {
                    $status = "Lulus";
                } else {
                    $status = "Tidak Lulus";
                }
                ?>
            </div>
            <div class="result">
                @php
                    $nilaiUjian = 75;
                    if ($nilaiUjian >= 80) {
                        $status = "Lulus dengan Nilai Baik";
                    } elseif ($nilaiUjian >= 60) {
                        $status = "Lulus";
                    } else {
                        $status = "Tidak Lulus";
                    }
                @endphp
                <p><strong>Nilai:</strong> {{ $nilaiUjian }}</p>
                <p><strong>Status:</strong> {{ $status }}</p>
            </div>
        </div>

        <div class="section">
            <h2>4. Perulangan (for & foreach)</h2>
            <div class="code-block">
                <?php
                // For loop
                for ($i = 1; $i <= 5; $i++) {
                    echo "Iterasi ke-$i<br>";
                }
                
                // Foreach
                $angka = [10, 20, 30, 40, 50];
                foreach ($angka as $num) {
                    echo "Angka: $num<br>";
                }
                ?>
            </div>
            <div class="result">
                <p><strong>For Loop (1-5):</strong></p>
                @for($i = 1; $i <= 5; $i++)
                    <span>Iterasi ke-{{ $i }}{{ $i < 5 ? ', ' : '' }}</span>
                @endfor
                
                <p style="margin-top: 10px;"><strong>Foreach Array:</strong></p>
                @foreach([10, 20, 30, 40, 50] as $num)
                    <span>Angka: {{ $num }}{{ $loop->last ? '' : ', ' }}</span>
                @endforeach
            </div>
        </div>

        <div class="section">
            <h2>5. Fungsi</h2>
            <div class="code-block">
                <?php
                function hitungLuasPersegi($sisi) {
                    return $sisi * $sisi;
                }
                
                function sapa($nama) {
                    return "Halo, $nama! Selamat datang!";
                }
                ?>
            </div>
            <div class="result">
                <p><strong>Luas Persegi (sisi = 5):</strong> {{ 5 * 5 }}</p>
                <p><strong>Sapaan:</strong> Halo, Jonathan! Selamat datang!</p>
            </div>
        </div>

        <div class="section">
            <h2>6. Date dan Time</h2>
            <div class="code-block">
                <?php
                $tanggalSekarang = date("Y-m-d");
                $waktuSekarang = date("H:i:s");
                $hariIni = date("l");
                ?>
            </div>
            <div class="result">
                <p><strong>Tanggal:</strong> {{ date('Y-m-d') }}</p>
                <p><strong>Waktu:</strong> {{ date('H:i:s') }}</p>
                <p><strong>Hari:</strong> {{ date('l') }}</p>
            </div>
        </div>

        <a href="/" class="back-link">← Kembali ke Home</a>
    </div>
</body>
</html>
