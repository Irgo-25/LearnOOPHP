<?php
// Inheritance and protected metode
class transport
{
    // Properties
    public $jenis, $merk, $tipe;

    // methode
    public function __construct($jenis, $merk, $tipe)
    {

        $this->jenis = $jenis;
        $this->merk = $merk;
        $this->tipe = $tipe;
    }
    public function callTransport()
    {
        echo "Ini Kendaraan : .{$this->jenis}, {$this->merk}, {$this->tipe} .<a style='color:red;'>inheritance</a>";
        echo "<br>";
    }
}
class darat extends transport
{
    public function message()
    {
        $this->callTransport();
    }
}
class air extends transport
{
    public function message()
    {
        $this->callTransport();
    }
}
class udara extends transport
{
    public function message()
    {
        $this->callTransport();
    }
}
$akomodasi = new darat("Darat", "Astra", "Mobil");
$akomodasi->message();
$akomodasi = new air("air", "hyundai", "Kapal Ferry");
$akomodasi->message();
$akomodasi = new udara("Udara", "Garuda", "Pesawat");
$akomodasi->message();


// class employe
// {
//     // property
//     private $nama, $nim, $alamat;


//     // methode
//     protected function __construct($nama, $nim, $alamat)
//     {
//         $this->nama = $nama;
//         $this->nim = $nim;
//         $this->alamat = $alamat;
//     }

//     protected function getEmploye()
//     {
//         echo "Info Karyawan : .{$this->nama}, {$this->nim}, {$this->alamat}";
//     }

//     // inheritance overdrive

// }
