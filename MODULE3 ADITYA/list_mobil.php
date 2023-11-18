<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)

            $query = mysqli_query($connection, "SELECT * FROM showroom_mobil");

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            if ($query -> num_rows > 0 ){
                echo "<table border='1'>
                        <tr>
                            <th>id</th>
                            <th>Nama Mobil</th>
                            <th>Brand Mobil</th>
                            <th>Warna Mobil</th>
                            <th>Tipe Mobil</th>
                            <th>Harga Mobil</th>
                            <th>Detail Mobil</th>
                        </tr>";
            
                while($pilih = mysqli_fetch_assoc($query)){
                    echo "<tr>
                            <td>".$pilih['id']."</td>
                            <td>".$pilih['nama_mobil']."</td>
                            <td>".$pilih['brand_mobil']."</td>
                            <td>".$pilih['warna_mobil']."</td>
                            <td>".$pilih['tipe_mobil']."</td>
                            <td>".$pilih['harga_mobil']."</td>
                            <td><a href= 'form_detail_mobil.php?id=". $pilih["id"]."'>Detail Mobil</a></td>
                        </tr>";
                }
                echo "</table>";
            }else{
                echo "tidak ada data dalam tabel";
            }
           
            







            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
            

            
            
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>
