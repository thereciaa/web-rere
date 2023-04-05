<?php 

// const sama define sama sama digunakan agar variabel tetap konstan tapi bedanya itu di Define bisa dibilang mirip dengan “replace” yang biasa kalian temukan di program teks editor atau semacamnya. Define menggunakan nama tertentu untuk menggantikan satu bagian program yang berulang. format tetap bagi di replace

// define('NAMA', 'rere');
// echo NAMA;

// echo "<br>";

// const NIP = 1234;
// echo NIP;

class Coba {
    //define('NAMA', 'rere');
    const NAMA = 'rere';
}

echo Coba::NAMA;

?>