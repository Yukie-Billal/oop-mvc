<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="<?= $base_url ?>css/style.css">
</head>
<body>
    <center>
    <h2>Data Produk From Model</h2>
    <table>
        <tr>
            <th>#</th>
            <th>Nama Produk</th>
            <th>Merek</th>
            <th>Harga</th>
        </tr>
        <?php foreach ($data['produk'] as $produk) { ?>
            <tr>
                <td><?= $produk['id'] ?></td>
                <td><?= $produk['nama_produk'] ?></td>
                <td><?= $produk['merek'] ?></td>
                <td><?= $produk['harga'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>