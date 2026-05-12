<?php

class Manusia
{

    protected $name;
    protected $nik = "253307027027";
    protected $umur; 

    public function getNama()
    {
        return $this->name;
    }

    public function setNama($name)
    {
        $this->name = $name;
    }

    public function getUmur()
    {
        return $this->umur;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    public function getNIK()
    {
        return "NIK: {$this->nik}";
    }
}
