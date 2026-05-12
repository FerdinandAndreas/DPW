<?php


class buah
{
    public    $nama;
    protected $warna;   
    private   $berat;
}

$mango = new buah();
$mango->nama  = 'Mango'; 


class buahFixed
{
    public    $nama;
    protected $warna;
    private   $berat;

    public function getWarna()
    {
        return $this->warna;
    }

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    public function getBerat()
    {
        return $this->berat;
    }

    public function setBerat($berat)
    {
        $this->berat = $berat;
    }
}

$mango2 = new buahFixed();
$mango2->nama = 'Mango';
$mango2->setWarna('Orange'); 
$mango2->setBerat('250');    

echo "<h3>Hasil Buah Setelah Diperbaiki</h3>";
echo "Nama  : " . $mango2->nama          . "<br>";
echo "Warna : " . $mango2->getWarna()    . "<br>";
echo "Berat : " . $mango2->getBerat()    . " gram<br>";
