<?php
require 'function.php';

$promakeup = query("SELECT * FROM promakeup");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YSL Store Website</title>
    <link rel="stylesheet" type="text/css" href="indexx.css">
</head>

    <body>
        <div class="hero">
            <nav>
                <img src="logo.png" class="logo" width="100px" height="100px">
                <ul>
                    <li><a class="active" href="#header">Home</a></li>
                    <li><a href="#aside">Popular</a></li>
                    <li><a href="#table">List Product</a></li>
                    <li><a href="#footer">Contact</a></li>
                </ul>
                <a href="#" class="button-nav">Search</a>
            </nav>
            <header id="header">
                <div class="content">
                    <h2>LIMITED QUANTITIES AVAILABLE</h2>
                    <h1>HOLIDAY ADVENT CALENDAR</h1>
                    <h3>Holiday Advent Calendar. Temukan kejutan setiap 
                        harinya dari 24-pcs koleksi makeup hingga fragrances 
                        YSL Beauty. Tersedia dalam jumlah terbatas.</h3>
                        <a href="#" class="button-head">Buy Now</a>
                </div>
            </header>
            <aside id="aside">
                <div class="text-title">
                    <h1>Now Popular</h1>
                </div>
                <div class="box-cards">
                    <img src="lipysl.jpg" width="100px" height="100px">
                    <h2>YSL Lip Rouge Volupte</h2>
                    <p>An oil-in-a-stick, medium-coverage lipstick 
                        with an innovative texture that provides 
                        high-performance.</p>
                    <h6>$260.00</h6>
                    <a href="#" class="button-box">Buy</a>
                </div>

                <div class="box-cards">
                    <img src="ysleyebrow.jpg" width="100px" height="100px">
                    <h2>YSL Couture for Eyebrows</h2>
                    <p>YSL brow palette, easy for natural looking 
                        eyebrows or can be built up for more impact</p>
                    <h6>$210.00</h6>
                    <a href="#" class="button-box">Buy</a>
                </div>

                <div class="box-cards">
                    <img src="yslurbansummer.jpg" width="100px" height="100px">
                    <h2>YSL Urban Summer</h2>
                    <p>YSL Urban Escape Summer Makeup 
                        Collection is a capsule collection featuring 
                        just a couple of products.</p>
                    <h6>$190.00</h6>
                    <a href="#" class="button-box">Buy</a>
                </div>
            </aside>

            <article id=table>
                <div id="table-makeup">
                    <h1>Data Makeup</h1>

    <a href="adddata.php">Add Data Makeup</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th> No.</th>
            <th> Nama</th>
            <th> Type</th>
            <th> Desc</th>
            <th> Price</th>
            <th> Image</th>
            <th> Action</th>
        </tr>

        <?php $i=1 ?>
        <?php foreach($promakeup as $row): ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row["produkName"] ?></td>
            <td><?php echo $row["skinType"] ?></td>
            <td><?= $row["desc"] ?></td>
            <td><?= $row["price"] ?></td>
            <td><img src="image/<?= $row["produkUrl"] ?>" alt="" width="50"></td>
             <td>
             <a href="">Remove</a>
             <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Are U Sure?')";>Delete</a>
        </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach ?>
    </table>
    </div>
     </article>
    <footer id="footer">
        <div class="detail-footer"></div>
        <h2>My Contact</h2>
        <div>
            <a id="profile-link" href="https://id.pinterest.com/khesyaamellput/" target="_blank"><img src="https://play-lh.googleusercontent.com/dVsv8Hc4TOUeLFAahxR8KANg22W9dj2jBsTW1VHv3CV-5NCZjP9D9i2j5IpfVx2NTB8" width="100px" height="100px"></a>
            <p>Pinterest</p>
        </div>
        <div>
            <a href="https://www.linkedin.com/in/khesya-amelia-211552233/" target="_blank"><img src="https://play-lh.googleusercontent.com/kMofEFLjobZy_bCuaiDogzBcUT-dz3BBbOrIEjJ-hqOabjK8ieuevGe6wlTD15QzOqw" width="60px" height="60px"></a>
            <p>Linkedin</p>
        </div>
        <div>
            <a href="https://dribbble.com/khesya" target="_blank"><img src="https://seeklogo.com/images/D/dribbble-logo-143FF96D65-seeklogo.com.png" width="100px" height="100px"></a>
            <p>Dribbble</p>
        </div>
        <div>
            <a href="https://www.youtube.com/channel/UCR2QhmX7s_2qFi-dBiEBLWw" target="_blank"><img src="https://play-lh.googleusercontent.com/lMoItBgdPPVDJsNOVtP26EKHePkwBg-PkuY9NOrc-fumRtTFP4XhpUNk_22syN4Datc" width="60px" height="60px"></a>
            <p>Youtube</p>
        </div>
        <div>
            <a href="https://www.dicoding.com/users/khesyaa_amell" target="_blank"><img src="https://img30.jd.id/Indonesia/s880x0_/amZzL3Q2Ny81OC82MDk3MDY0MTUvMjI0MTIvYjU0M2JlY2YvNWVhN2YyNzhOYzY1MGVjZGU.png.webp" width="80px" height="80px"></a>
            <p>Dicoding</p>
        </div>
        <div>
            <a href="https://github.com/khesyaap" target="_blank"><img src="https://www.kindpng.com/picc/m/255-2558173_github-logo-png-transparent-png.png" width="70px" height="70px"></a>
            <p>Github</p>
        </div>
    </footer>
    </body>
</html>