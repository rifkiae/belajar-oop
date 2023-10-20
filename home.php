<?php
require('koneksi.php');
require('query.php');

// Mengambil parameter user_fullname dari URL
if (isset($_GET['user_fullname'])) {
    $user_fullname = $_GET['user_fullname'];
} else {
    $user_fullname = "Pengguna"; // Jika parameter tidak ada, tetapkan nilai default
}

$obj = new crud;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo htmlspecialchars($user_fullname); ?></h1>
    <table border='1'>
        <thead>
            <tr>
                <th>NO</th>
                <th>Email</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $data = $obj->lihatdata();
                $no = 1;
                if ($data->rowCount() > 0) {
                    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo htmlspecialchars($row['user_email']); ?></td>
                <td><?php echo htmlspecialchars($row['user_fullname']); ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data yang tersedia.</td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
