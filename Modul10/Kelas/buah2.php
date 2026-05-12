<?php


class buah2
{
    public $nama;
    public $warna;
    public $bobat;

    function set_name($n)
    {
        $this->nama = $n;
    }

    protected function set_color($n)
    {
        $this->warna = $n;
    }

    // Method private - hanya dari dalam kelas itu sendiri
    private function set_weight($n)
    {
        $this->bobat = $n;
    }
}

$mango = new buah2();
$mango->set_name('Mango');   

class buah2Fixed
{
    public $nama;
    public $warna;
    public $bobat;

    public function set_name($n)
    {
        $this->nama = $n;
    }

    public function set_color($n)   
    {
        $this->warna = $n;
    }

    public function set_weight($n)  
    {
        $this->bobat = $n;
    }
}

$mango2 = new buah2Fixed();
$mango2->set_name('Mango');
$mango2->set_color('Orange');   
$mango2->set_weight('250');     

echo "<h3>Hasil Buah2 Setelah Diperbaiki</h3>";
echo "Nama  : " . $mango2->nama   . "<br>";
echo "Warna : " . $mango2->warna  . "<br>";
echo "Berat : " . $mango2->bobat  . " gram<br>";
