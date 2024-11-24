<html>
<head>
    <title>Edit Mahasiswa</title>
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
            background-color: #2196F3;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form method="POST">
        <div class="form-group">
            <label>NIM:</label>
            <input type="text" name="nim" value="<?php echo $this->student->nim; ?>" required>
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" value="<?php echo $this->student->nama; ?>" required>
        </div>
        <div class="form-group">
            <label>Kelas:</label>
            <input type="text" name="kelas" value="<?php echo $this->student->kelas; ?>" required>
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <input type="text" name="alamat" value="<?php echo $this->student->alamat; ?>" required>
        </div>
        <div class="form-group">
            <label>Telepon:</label>
            <input type="text" name="telepon" value="<?php echo $this->student->telepon; ?>" required>
        </div>
        <button type="submit" class="btn btn-submit">Update</button>
    </form>
</body>
</html>
