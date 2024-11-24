<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <style>
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-submit {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Tambah Mahasiswa Baru</h1>
    <form method="POST">
        <div class="form-group">
            <label>NIM:</label>
            <input type="text" name="nim" required>
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" required>
        </div>
        <div class="form-group">
            <label>Kelas:</label>
            <input type="text" name="kelas" required>
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <input type="text" name="alamat" required>
        </div>
        <div class="form-group">
            <label>Telepon:</label>
            <input type="text" name="telepon" required>
        </div>
        <button type="submit" class="btn btn-submit">Simpan</button>
    </form>
</body>
</html>
