<?php

require_once('manusia.php');

class mahasiswa extends Manusia
{
    protected $nim;
    protected $kelas;
    protected $jurusan;

    public function __construct($nama)
    {
        $this->setNama($nama);
    }

    public function setNIM($nim)
    {
        $this->nim = $nim;
    }

    public function getNIM()
    {
        return $this->nim;
    }

    public function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }

    public function getKelas()
    {
        return $this->kelas;
    }

    // jurusan
    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }
}