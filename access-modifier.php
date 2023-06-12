<?php


class transport
{
    // Properties
    public $jenis;
    protected $merk;
    private $tipe;

    // methode
    public function __construct($jenis, $merk, $tipe)
    {

        $this->jenis = $jenis;
        $this->merk = $merk;
        $this->tipe = $tipe;
    }
    protected function callTransport()
    {
        echo "Ini Kendaraan : .{$this->jenis}, {$this->merk}, {$this->tipe}";
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
$akomodasi = new calling("Darar", "Astra", "Mobil");
$akomodasi->message();
