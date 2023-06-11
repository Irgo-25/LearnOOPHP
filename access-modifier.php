<?php


class transport
{
    // Properties
    public $jenis;
    protected $merk;
    private $tipe;

    // methode
    protected function __construct($jenis, $merk, $tipe)
    {

        $this->jenis = $jenis;
        $this->merk = $merk;
        $this->tipe = $tipe;
    }
    public function __destruct()
    {
        echo "Ini Kendaraan : .{$this->jenis}, {$this->merk}, {$this->tipe}";
        echo "<br>";
    }
}
$akomodasi = new transport("Darar", "Astra", "Mobil");
