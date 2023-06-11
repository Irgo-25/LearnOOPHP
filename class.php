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
    public function gettransport()
    {
        return "$this->jenis, $this->merk, $this->tipe";
    }
}
$darat1 = new transport();
$darat1->jenis = "motor";
$darat1->merk = "Honda";
$darat1->tipe = "bebek";
$darat1->tahun_pembuatan = 2013;
$darat1->cc = "100cc";

$darat2 = new transport();
$darat2->jenis = "Mobil";
$darat2->merk = "Hyundai";
$darat2->tipe = "sport";
$darat2->tahun_pembuatan = 2015;
$darat2->cc = "1000cc";

echo "transport :" . $darat1->gettransport();
echo "<br>";
echo "transport :" . $darat2->gettransport();
