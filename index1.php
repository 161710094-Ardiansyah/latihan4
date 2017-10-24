<?php 
    class kambing {
    public $suara ='wew';
    public $kaki = 4;
    public $telinga = 2;
    public $berat = 70;
    public $warna = 'putih';
}

$kambing_putih = new kambing;
echo "kambing bersuara : ".$kambing_putih->suara. " dan kaki : ".$kambing_putih->kaki."mempunyai telinga : ".$kambing_putih->telinga." dan mempunyai berat :".$kambing_putih->berat."dan berwarna :".$kambing_putih->warna;
?>