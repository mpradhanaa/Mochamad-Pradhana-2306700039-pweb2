<?php

// Class Induk: SivitasAkademik
class SivitasAkademik {
    protected $nama;

    // Constructor untuk mengisi data nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    
    public function getNama() {
        return $this->nama;
    }
}


class Dosen extends SivitasAkademik {
    private $nidn;

    // Constructor untuk mengisi data nama dan nidn
    public function __construct($nama, $nidn) {
        parent::__construct($nama); // Memanggil constructor parent
        $this->nidn = $nidn;
    }

    
    public function getNidn() {
        return $this->nidn;
    }

    // informasi dosen
    public function tampilkanInfo() {
        return "Dosen: " . $this->getNama() . " | NIDN: " . $this->nidn;
    }
}


class Mahasiswa extends SivitasAkademik {
    private $nim;

    
    public function __construct($nama, $nim) {
        parent::__construct($nama); // Memanggil constructor parent
        $this->nim = $nim;
    }

    
    public function getNim() {
        return $this->nim;
    }

    
    public function tampilkanInfo() {
        return "Mahasiswa: " . $this->getNama() . " | NIM: " . $this->nim;
    }
}

// Instansiasi Object 
$dosen1 = new Dosen("Dr. Budi Santoso, M.Kom.", "1234567890");
$dosen2 = new Dosen("Prof. Siti Aminah, Ph.D.", "0987654321");

$mahasiswa1 = new Mahasiswa("Mochamad Pradhana", "2306700039");
$mahasiswa2 = new Mahasiswa("Zidan Ikhwan", "2306700051");
$mahasiswa3 = new Mahasiswa("Dimas Widjoyo", "2306700047");


echo "=== SISTEM AKADEMIK SEDERHANA ===\n";
echo "================================\n\n";

echo "--- DATA DOSEN ---\n";
echo $dosen1->tampilkanInfo() . "\n";
echo $dosen2->tampilkanInfo() . "\n";
echo "\n";

echo "--- DATA MAHASISWA ---\n";
echo $mahasiswa1->tampilkanInfo() . "\n";
echo $mahasiswa2->tampilkanInfo() . "\n";
echo $mahasiswa3->tampilkanInfo() . "\n";
echo "\n";


echo "--- MENGGUNAKAN GETTER DARI CLASS INDUK ---\n";
echo "Nama Dosen 1: " . $dosen1->getNama() . "\n";
echo "Nama Mahasiswa 1: " . $mahasiswa1->getNama() . "\n";

?>