<?php

class akunBank
{

    protected $nomorAkun;
    protected $saldo;
    protected $namaPemilik;

    public function __construct($nomorAkun, $nominal)
    {
        $this->nomorAkun = $nomorAkun;
        $this->saldo     = $nominal;
    }


    public function setNama($nama)
    {
        $this->namaPemilik = $nama;
    }

    public function getNama()
    {
        return $this->namaPemilik;
    }


    public function getNomorAkun()
    {
        return $this->nomorAkun;
    }


    public function tambahUang($jumlah)
    {
        if ($jumlah <= 0) {
            return "Jumlah uang tidak valid.";
        }

        $this->saldo += $jumlah;

        return "Berhasil menambah saldo sebesar Rp " .
               number_format($jumlah, 0, ',', '.');
    }

    public function kurangUang($jumlah)
    {
        if ($jumlah <= 0) {
            return "Jumlah uang tidak valid.";
        }

        if ($jumlah > $this->saldo) {
            return "Saldo tidak mencukupi.";
        }

        $this->saldo -= $jumlah;

        return "Berhasil menarik saldo sebesar Rp " .
               number_format($jumlah, 0, ',', '.');
    }

    public function tampilUang()
    {
        return "
            Nama Pemilik : {$this->namaPemilik}<br>
            Nomor Akun : {$this->nomorAkun}<br>
            Saldo : Rp " . number_format($this->saldo, 0, ',', '.');
    }

    public function hitungPajak()
    {
        $pajak = $this->saldo * 0.11;

        return "Pajak saldo 11% : Rp " .
               number_format($pajak, 0, ',', '.');
    }
}