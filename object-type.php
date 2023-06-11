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
class Cetak
{
    // object-type
    public function printTransport(transport $transport)
    {
        $print = "{$transport->jenis}, {$transport->gettransport()}, {$transport->tahun_pembuatan}, {$transport->cc}";
        return $print;
    }
}


$darat1 = new transport("Motor", "Suzuki", "sport", 2018, "150cc");
$darat2 = new transport("Mobil", "Daihatsu", "Biasa", 2020, "1000cc");
$infoCetak = new Cetak();

echo "transport :" . $darat1->gettransport();
echo "<br>";
echo "transport :" . $darat2->gettransport();
echo "<br>";
echo $infoCetak->printTransport($darat1);
echo "<br>";
echo $infoCetak->printTransport($darat2);
