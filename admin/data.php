<?php 

if(isset($_POST['btnInputBarang'])){

    // mengambil semua data dari form ke dalam variabel lokal
    $nama = htmlspecialchars($_POST['nama']); // mengambil data nama yang berasal dari form 
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $gambar = $_POST['gambar'];
    
    

    // variabel array associative 
    $data = [ 
        'nama' => $nama,
        'deskripsi' => $deskripsi,
        'harga' => $harga,
        'kategori' => $kategori,
        'gambar' => $gambar
        
    ];

    $validasi = validasiData($data);

    if($validasi == 0 ){
        echo "data sudah lengkap siap di inputkan";
        $result = inputbarang($data, $koneksi);
        if($result) header("location:input_product.php?status=1");
        else header("location:input_product.php?errno=1");
    }
    else {
        echo "data $validasi kurang";
    }
}
?>




<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>
    <h3>
        <?php 
            echo $nama;
        ?>
    </h3>    
    <h3>
        <?php 
            echo $deskripsi;
        ?>
    </h3>    
    <h3>
        <?= $harga; ?>
    </h3>    
        
    <h1>
        <?php 
              echo "<img src='$destinationPath' alt='Uploaded Image' style='max-width: 400px;'>";
        ?>
    </h1>



</body>
</html> -->