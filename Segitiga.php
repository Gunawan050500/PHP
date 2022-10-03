<?php
require_once 'Bentuk2D.php';
class Segitiga extends Bentuk2D
{
    public $alas;
    public $tinggi;
    const BENTUK = 'Segitiga Siku-Siku';

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function sisiMiring()
    {
        $sisiMiring = sqrt(pow($this->alas, 2) + pow($this->tinggi, 2));
        return $sisiMiring;
    }

    public function luasBidang()
    {
        $luas = 0.5 * ($this->alas * $this->tinggi);
        return $luas;
    }

    public function kelilingBidang()
    {
        $keliling = $this->alas + $this->tinggi + $this->sisiMiring();
        return $keliling;
    }

    public function cetak()
    {
        echo
        '
            <td>' . self::BENTUK . '</td>
            <td>
            Alas ' . $this->alas . '<br>
            Tinggi ' . $this->tinggi . '<br>
            Sisi Miring ' . round($this->sisiMiring()) . '<br>
            </td>
            <td>' . round($this->luasBidang()) . ' cm</td>
            <td>' . round($this->kelilingBidang()) . ' cm</td>
        </tr>';
    }
}
