<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tabel Data Dosen</title>
    </head>
        <body>
            <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];
            ?>
            <h2>Data Dosen</h2>
            <table border="1" cellpadding="5" cellspacing="0">
                <tr>
                    <td>Nama</td>
                    <td><?php echo $Dosen['nama']; ?></td>
                </tr>
                <tr>
                    <td>Domisili</td>
                    <td><?php echo $Dosen['domisili']; ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><?php echo $Dosen['jenis_kelamin']; ?></td>
                </tr>
        </table>
    </body>
</html>
