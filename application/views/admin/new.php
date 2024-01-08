<!DOCTYPE html>
<html>
<head>
    <title>Hasil Penjumlahan Data Berdasarkan 4 Huruf Pertama</title>
</head>
<body>
    <h1>Hasil Penjumlahan Data Berdasarkan 4 Huruf Pertama</h1>
    <table>
        <tr>
            <th>4 Huruf Pertama</th>
            <th>Jumlah</th>
        </tr>
        <?php foreach ($sum_data as $data): ?>
            <tr>
                <td><?php echo $data->first4Letters; ?></td>
                <td><?php echo $data->total; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>