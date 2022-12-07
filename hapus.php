<?php
require 'function.php';
// variable untuk menampung id yang diambil dari database 
$id = $_GET["id"];

if (hapusData($id) > 0){
    echo "<script>
        alert('data deleted successfully');
        document.location.href='index.php;
        </script>";
} else {
    echo "<script>
        alert('data failed to delete');
        document.location.href='index.php;
        </script>";
}
?>