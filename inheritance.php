<?php
// Inheritance and protected metode
class transport
{
    // Properties
    private $jenis, $merk, $tipe;

    // methode
    public function __construct($jenis, $merk, $tipe)
    {

        $this->jenis = $jenis;
        $this->merk = $merk;
        $this->tipe = $tipe;
    }
    protected function callTransport()
    {
        echo "Ini Kendaraan : .{$this->jenis}, {$this->merk}, {$this->tipe}. <a style='color:red;'>inheritance dan access metode protected</a>";
        echo "<br>";
    }
}
class calling extends transport
{
    public function message()
    {
        $this->callTransport();
    }
}
$akomodasi = new calling("Darat", "Astra", "Mobil");
$akomodasi->message();
class employe
{
    // property
    private $nama, $nim, $alamat;


    // methode
    protected function __construct($nama, $nim, $alamat)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->alamat = $alamat;
    }

    protected function getEmploye()
    {
        echo "Info Karyawan : .{$this->nama}, {$this->nim}, {$this->alamat}";
    }

    // inheritance overdrive

}
