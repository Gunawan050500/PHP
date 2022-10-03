<?php
require_once 'Bentuk2D.php';
class Lingkaran extends Bentuk2D
{
    public $jari2;
    const BENTUK = 'Lingkaran';

    public function __construct($jari2)
    {
        $this->jari2 = $jari2;
    }

    public function luasBidang()
    {
        $luas = pi() * ($this->jari2 * $this->jari2);
        return $luas;
    }

    public function kelilingBidang()
    {
        $keliling = pi() * ($this->jari2 + $this->jari2);
        return $keliling;
    }

    public function cetak()
    {
        echo
        '
            <td>' . self::BENTUK . '</td>
            <td>Jari-Jari ' . $this->jari2 . '</td>
            <td>' . round($this->luasBidang()) . ' cm</td>
            <td>' . round($this->kelilingBidang()) . ' cm</td>
        </tr>';
    }
}
