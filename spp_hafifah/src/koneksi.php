<?php
$koneksi = mysqli_connect("localhost", "root","","db spp_hafifah");

// check connection
if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>