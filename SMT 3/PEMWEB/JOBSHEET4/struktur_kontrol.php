<?php
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<h3>Perhitungan Jarak Atlet</h3>";
echo "Target jarak: $jarakTarget km <br>";
echo "Peningkatan harian: $peningkatanHarian km <br>";
echo "Total hari yang dibutuhkan: $hari hari <br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "<h3>Perhitungan Hasil Panen</h3>";
echo "Jumlah lahan: $jumlahLahan <br>";
echo "Tanaman per lahan: $tanamanPerLahan <br>";
echo "Buah per tanaman: $buahPerTanaman <br>";
echo "Total buah yang akan dipanen: $jumlahBuah <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "<h3>Perhitungan Skor Ujian</h3>";
echo "Daftar skor ujian: " . implode(", ", $skorUjian) . "<br>";
echo "Total skor ujian: $totalSkor <br>";
$rataRata = $totalSkor / count($skorUjian);
echo "Rata-rata skor ujian: $rataRata <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

echo "<h3>Hasil Kelulusan Siswa</h3>";

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
?>