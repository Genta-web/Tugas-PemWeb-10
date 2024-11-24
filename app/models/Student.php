<?php
class Student {
    private $conn;
    private $table = "students";

    // Properties
    public $id;
    public $nim;
    public $nama;
    public $kelas;
    public $alamat;
    public $telepon;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Mengambil semua data siswa
    public function getAllStudents() {
        $query = "SELECT * FROM " . $this->table . " ORDER BY nama ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Menambah siswa baru
    public function create() {
        $query = "INSERT INTO " . $this->table . " 
                (nim, nama, kelas, alamat, telepon) 
                VALUES (:nim, :nama, :kelas, :alamat, :telepon)";

        $stmt = $this->conn->prepare($query);

        // Binding parameter
        $stmt->bindParam(":nim", $this->nim);
        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":kelas", $this->kelas);
        $stmt->bindParam(":alamat", $this->alamat);
        $stmt->bindParam(":telepon", $this->telepon);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Mengambil data siswa berdasarkan ID
    public function getById() {
        $query = "SELECT * FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->nim = $row['nim'];
        $this->nama = $row['nama'];
        $this->kelas = $row['kelas'];
        $this->alamat = $row['alamat'];
        $this->telepon = $row['telepon'];
    }

    // Update data siswa
    public function update() {
        $query = "UPDATE " . $this->table . " 
                SET nim = :nim, 
                    nama = :nama, 
                    kelas = :kelas, 
                    alamat = :alamat, 
                    telepon = :telepon 
                WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // Binding parameter
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":nim", $this->nim);
        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":kelas", $this->kelas);
        $stmt->bindParam(":alamat", $this->alamat);
        $stmt->bindParam(":telepon", $this->telepon);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Hapus data siswa
    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
}
