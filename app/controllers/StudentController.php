<?php
class StudentController {
    private $db;
    private $student;

    public function __construct($database) {
        $this->db = $database;
        $this->student = new Student($database);
    }

    // Menampilkan daftar siswa
    public function index() {
        $result = $this->student->getAllStudents();
        include_once 'views/students/list.php';
    }

    // Halaman tambah siswa
    public function add() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->student->nim = $_POST['nim'];
            $this->student->nama = $_POST['nama'];
            $this->student->kelas = $_POST['kelas'];
            $this->student->alamat = $_POST['alamat'];
            $this->student->telepon = $_POST['telepon'];

            if($this->student->create()) {
                header("Location: index.php");
            }
        }
        include_once 'views/students/add.php';
    }

    // Halaman edit siswa
    public function edit($id) {
        $this->student->id = $id;
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->student->nim = $_POST['nim'];
            $this->student->nama = $_POST['nama'];
            $this->student->kelas = $_POST['kelas'];
            $this->student->alamat = $_POST['alamat'];
            $this->student->telepon = $_POST['telepon'];

            if($this->student->update()) {
                header("Location: index.php");
            }
        }
        
        $this->student->getById();
        include_once 'views/students/edit.php';
    }

    // Hapus siswa
    public function delete($id) {
        $this->student->id = $id;
        if($this->student->delete()) {
            header("Location: index.php");
        }
    }
}
