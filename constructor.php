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

    // Methode
    public function __construct($jenis, $merk, $tipe, $tahun_pembuatan, $cc)
    {
        $this->jenis = $jenis;
        $this->merk = $merk;
        $this->tipe = $tipe;
        $this->tahun_pembuatan = $tahun_pembuatan;
        $this->cc = $cc;
    }

    public function gettransport()
    {
        return "$this->jenis, $this->merk, $this->tipe";
    }
}
$darat1 = new transport("Motor", "Suzuki", "sport", 2018, "150cc");

$darat2 = new transport("Mobil", "Daihatsu", "Biasa", 2020, "1000cc");

echo "transport :" . $darat1->gettransport();
echo "<br>";
echo "transport :" . $darat2->gettransport();
