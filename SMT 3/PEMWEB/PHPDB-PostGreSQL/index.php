<?php
$host = 'localhost';
$port = '5432';
$dbname ='phpdatabase';
$user = 'postgres';
$pass = '12345';
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if (!$conn) {
    die('Koneksi gagal: ' . pg_last_error());
}
pg_set_client_encoding($conn, 'UTF8');

$sql = 'SELECT
            "nim"     AS "Nim",
            "nama"    AS "Nama",
            "email"   AS "Email",
            "jurusan" AS "Jurusan"
        FROM "TB_Mahasiswa"
        ORDER BY "nim"';

$result = pg_query($conn, $sql);
if(!$result) {
    die('Query gagal: ' . pg_last_error($conn));
}
?>

<!DOCTYPE html>
<html Lang="en">
<head>
    <title>Document</title>
</head>
<body>
<h1> Daftar Mahasiswa </h1>
<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>No.</th>
    <th>Nim</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
    <th>Aksi</th>
</tr>
<?php $i=1; ?>
<?php while($row = pg_fetch_assoc($result)): ?>
<tr>
    <td><?= $i; ?></td>
    <td><?= htmlspecialchars($row["Nim"], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($row["Nama"], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($row["Email"], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($row["Jurusan"], ENT_QUOTES, 'UTF-8'); ?></td>
    <td>
        <a href="">Edit</a>
        <a href="">Hapus</a>
    </td>
</tr>
<?php $i++; endwhile; ?>
</table>
</body>
</html>
<?php
pg_free_result($result);
pg_close($conn);
?>