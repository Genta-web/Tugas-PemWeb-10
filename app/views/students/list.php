<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            color: white;
            border-radius: 3px;
        }
        .btn-add {
            background-color: #4CAF50;
        }
        .btn-edit {
            background-color: #2196F3;
        }
        .btn-delete {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="index.php?action=add" class="btn btn-add">Tambah Mahasiswa</a>
    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?php echo $row['nim']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['kelas']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['telepon']; ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $row['id']; ?>" 
                       class="btn btn-edit">Edit</a>
                    <a href="index.php?action=delete&id=<?php echo $row['id']; ?>" 
                       class="btn btn-delete" 
                       onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>