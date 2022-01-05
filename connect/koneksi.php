<?php
$host = mysqli_connect("localhost", "root", "", "webindex");

if($host){
    echo "Database berhasil";
}else{
    echo "Database tidak berhasil";
}
?>