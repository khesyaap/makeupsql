<?php
require 'function.php';

if( isset($_POST["submit"])){
    if(adddata($_POST) > 0){
        // echo "Data berhasil ditambahkan";
        echo "<script>
        alert('Data added successfully');
        document.location.href='index.php;
        </script>";
    } else {
        // echo "Data gagal ditambahkan";
        echo "<script>
        alert('data failed to add');
        document.location.href='index.php;
        </script>";
    }
}
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data Makeup</title>
</head>
<body>
    <h1>Add Data Makeup</h1>

    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    Nama: <input type="text" name="name" required>
    <br><br>
    Type: <input type="text" name="type" required>
    <br><br>
    Desc: <input type="text" name="desc" required>
    <br><br>
    Price: <input type="text" name="price" required>
    <br><br>
    Image: <input type="text" name="image" required>
    <br><br>
    <button type="submit" name="submit">Add Data</button>
</form>

</body>
</html>