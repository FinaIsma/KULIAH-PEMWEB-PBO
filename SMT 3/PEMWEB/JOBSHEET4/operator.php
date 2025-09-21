<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<h3>Operator Aritmatika</h3>";
echo "Hasil Tambah: $hasilTambah <br>";
echo "Hasil Kurang: $hasilKurang <br>";
echo "Hasil Kali: $hasilKali <br>";
echo "Hasil Bagi: $hasilBagi <br>";
echo "Sisa Bagi: $sisaBagi <br>";
echo "Pangkat: $pangkat <br><br>";

echo "<h3>Operator Perbandingan</h3>";
echo "Apakah a sama dengan b? "; var_dump($hasilSama); echo "<br>";
echo "Apakah a tidak sama dengan b? "; var_dump($hasilTidakSama); echo "<br>";
echo "Apakah a lebih kecil dari b? "; var_dump($hasilLebihKecil); echo "<br>";
echo "Apakah a lebih besar dari b? "; var_dump($hasilLebihBesar); echo "<br>";
echo "Apakah a lebih kecil atau sama dengan b? "; var_dump($hasilLebihKecilSama); echo "<br>";
echo "Apakah a lebih besar atau sama dengan b? "; var_dump($hasilLebihBesarSama); echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<h3>Operator Logika</h3>";
echo "Hasil AND (a && b): "; var_dump($hasilAnd); echo "<br>";
echo "Hasil OR (a || b): "; var_dump($hasilOr); echo "<br>";
echo "Hasil NOT a (!a): "; var_dump($hasilNotA); echo "<br>";
echo "Hasil NOT b (!b): "; var_dump($hasilNotB); echo "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "<h3>Operator Penugasan</h3>";
echo "Nilai awal a = 10, b = 5 <br><br>"; 
echo "Setelah a += b : $a <br>";
echo "Setelah a -= b : $a <br>";
echo "Setelah a *= b : $a <br>";
echo "Setelah a /= b : $a <br>";
echo "Setelah a %= b : $a <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<h3>Operator Identik</h3>";
echo "Apakah a identik dengan b (a === b)? "; var_dump($hasilIdentik);
echo "<br>";
echo "Apakah a tidak identik dengan b (a !== b)? "; var_dump($hasilTidakIdentik); echo "<br>";
?>
