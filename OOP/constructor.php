<?php 

class Produk{
    public $judul, 
            $penulis, 
            $penerbit, 
            $harga;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0){
        //echo "Hello";
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getlabel(){
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
        //return this->judul .',' . this->penulis;
    }
}

$produk1 = new Produk("Naruto", "Mahashi Nishimoto", "Erlangga", 10000);
$produk2 = new Produk("Astronomi", "Neil Amstrong", "Ilmuan", 20000);
$produk3 = new Produk("Doraeemon", "Faisal", "Tri Suaka", 10000);
$produk4 = new Produk("Mengenal Abjad", "Dedi Hartono", "Pintar Baca", 10000);


//var_dump($produk1);
//var_dump($produk2);

echo $produk1->getlabel();
echo "<br>";
echo $produk2->getlabel();
echo "<br>";
echo $produk3->getlabel();
echo "<br>";
echo $produk4->getlabel();

?>