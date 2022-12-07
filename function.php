<?php
// koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "cruddbmkup");

function query($query){
    global $conn;

    // ambil data di database
    $result = mysqli_query ($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]= $row;
    }
    return $rows;
}

function adddata($data){
    global $conn;
    $produkName = htmlspecialchars($data["name"]);
    $skintype = htmlspecialchars($data["type"]);
    $desc = htmlspecialchars($data["desc"]);
    $price = htmlspecialchars($data["price"]);
    $produkUrl = htmlspecialchars($data["image"]);

    $query = "INSERT INTO promakeup VALUES('', '$produkName', '$skintype', '$desc', '$price', '$produkUrl')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapusData($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM promakeup WHERE id = $id");

    return mysqli_affected_rows($conn);
}


?>