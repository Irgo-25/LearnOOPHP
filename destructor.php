<?php
class transport
{
    // Properties
    public
        $jenis,
        $merk,
        $tipe,
        $tahun_pembuatan,
        $cc;

    // Methode constructor
    public function __construct($jenis, $merk, $tipe, $tahun_pembuatan, $cc)
    {
        $this->jenis = $jenis;
        $this->merk = $merk;
        $this->tipe = $tipe;
        $this->tahun_pembuatan = $tahun_pembuatan;
        $this->cc = $cc;
    }


    // Methode
    public function __destruct()
    {
        echo "Ini kendaraan : .{$this->jenis}, {$this->merk} , {$this->tipe}, {$this->tahun_pembuatan},{$this->cc}";
        echo "<br>";
    }
}
$darat1 = new transport("motor", "yamaha", "matic", 2020, "100cc");
$darat2 = new transport("mobil", "Astra", "transmision", 2020, "150cc");
$darat3 = new transport("kereta", "KRL", "matic", 2022, "1000cc");
$darat4 = new transport("bis", "Haryanto", "transmision", 2021, "200cc");
