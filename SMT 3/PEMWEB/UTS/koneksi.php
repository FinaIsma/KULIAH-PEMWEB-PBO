<?php
$host = "localhost";
$dbname = "kyukiez_db";
$user = "postgres";
$pass = "12345";

$conn = pg_connect("host=$host dbname=$dbname user=$user password=$pass");

if (!$conn) {
    die("Koneksi ke PostgreSQL gagal!");
}
echo "Koneksi berhasil ke PostgreSQL!<br><br>";

echo "<h3>Data User</h3>";
$sql_user = "SELECT * FROM users";
$result_user = pg_query($conn, $sql_user);

if (pg_num_rows($result_user) > 0) {
    echo "<table border='1' cellpadding='6'>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Password</th>
            </tr>";
    while ($row = pg_fetch_assoc($result_user)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['dateOfBirth']}</td>
                <td>{$row['password']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data user.<br>";
}

echo "<br><h3>Data Products</h3>";
$sql_product = "SELECT * FROM products";
$result_product = pg_query($conn, $sql_product);
if (pg_num_rows($result_product) > 0) {
    echo "<table border='1' cellpadding='6'>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
            </tr>";
    while ($row = pg_fetch_assoc($result_product)) {
        echo "<tr>
                <td>{$row['id_product']}</td>
                <td>{$row['name']}</td>
                <td>{$row['price']}</td>
                <td>{$row['stok']}</td>
                <td>{$row['desc']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data produk.<br>";
}

pg_close($conn);
?>
