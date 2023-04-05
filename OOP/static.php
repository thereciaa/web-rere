<?php 

class Contoh{
    public static $angka = 1;

    // $this digunakan untuk mereferensikan property atau method yang berada dalam current object. Sedangkan self digunakan untuk mereferensikan property atau method yang berada dalam current class.
    public function halo() {
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

echo Contoh::$angka;
echo "<br>";

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";

$obj2 = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";
?>