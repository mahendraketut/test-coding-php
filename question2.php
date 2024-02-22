<?php
class Siswa
{
    public $nrp;
    public $nama;
    public $daftarNilai;

    public function __construct($nrp, $nama)
    {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->daftarNilai = [new Nilai($this->randomMapel(), random_int(0, 100))];
    }

    private function randomMapel()
    {
        $mapel = ['inggris', 'indonesia', 'jepang'];
        return $mapel[array_rand($mapel)];
    }
}

class Nilai
{
    public $mapel;
    public $nilai;

    public function __construct($mapel, $nilai)
    {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
}

$students = [];
for ($i = 0; $i < 10; $i++) {
    $student = new Siswa('NRP' . $i, bin2hex(random_bytes(20)));
    $students[] = $student;
}

foreach ($students as $student) {
    echo "NRP : $student->nrp, Nama : $student->nama\n";
    foreach ($student->daftarNilai as $nilai) {
        echo "Mapel : $nilai->mapel, Memperoleh nilai: $nilai->nilai\n\n";
    }
}
