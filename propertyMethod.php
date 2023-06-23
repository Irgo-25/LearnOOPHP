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
        return "$this->jenis, $this->merk, $this->tipe, $this->tahun_pembuatan, $this->cc";
    }
}
$darat1 = new transport();
$darat1->jenis = "motor";
$darat1->merk = "Honda";
$darat1->tipe = "bebek";
$darat1->tahun_pembuatan = 2013;
$darat1->cc = "100cc";
echo "transport :" . $darat1->gettransport();
