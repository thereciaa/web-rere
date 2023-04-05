<?php 

class Produk{
    private $judul, 
            $penulis, 
            $penerbit, 
            $harga;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 0){
    parent::__construct($judul, $penulis, $penerbit, $harga);
    
    $this->jmlHalaman=$jmlHalaman;
}

public function getJudul(){
    return $this->judul; 
}
public function setJudul($judul){
    $this->judul = $judul;
}

    public function getInfoProduk(){
        $str = "Komik : " . parent::getInfoProduk() . " - $this->jmlHalaman Halaman";
        return $str;

    }
}

class Game extends Produk {
    public $waktumain;

    public function __construct($judul='judul', $penulis='penulis', $penerbit='penerbit', $harga = 0, $waktumain = 0) {
         // $this->judul = $judul;
        // $this->penulis = $penulis;
        // $this->penerbit = $penerbit;
        //$this->harga = $harga;
        //$this->waktumain = $waktumain;
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktumain=$waktumain;
    }

    public function getInfoProduk(){
        $str = "Game: " . parent::getInfoProduk() . " - $this->waktumain jam";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "$produk->judul | $produk->penulis, $produk->penerbit (Rp.$produk->harga) - $produk->waktumain Jam";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Mahashi Nishimoto", "Erlangga", 10000, 150);
$produk2 = new Game("Astronomy Game", "Neil Amstrong", "Ilmuan Computer", 20000, 50);

//yang muncul bukan dragon ball sifatnya private
$produk1->setJudul("Dragon Ball");
//bisa diatur karena di class komik itu bisa modif judul
$produk1->judul = "Pororo";


// $produk2->setJudul(minasha);
//tidak bisa muncul dikarenakan di produk2 tidak ada method buat set judul
 
echo $produk1->getJudul();

?>