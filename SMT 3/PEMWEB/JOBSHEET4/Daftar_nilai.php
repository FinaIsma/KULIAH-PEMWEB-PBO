<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);

unset($nilaiSiswa[0]);
unset($nilaiSiswa[1]);
unset($nilaiSiswa[8]);
unset($nilaiSiswa[9]);

$totalNilai = 0;
foreach ($nilaiSiswa as $nilai) {
    $totalNilai += $nilai;
}

echo "Total nilai setelah mengabaikan 2 tertinggi dan 2 terendah adalah: $totalNilai";
?>
