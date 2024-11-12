<?php

function validasiData($data){

    foreach($data as $index => $value){
        $value = trim($value);
        if($value === '' || $value === 0 || $value === null || $value === false){
            return $index;
        }
    }
    return 0;
}

function inputbarang($data, $koneksi){
    $nama = $data['nama'];
    $deskripsi = $data['deskripsi'];
    $harga = $data['harga'];
    $kategori = $data['kategori'];
    $gambar = $data['gambar'];
    

    $sql = "INSERT INTO product (`name`,`description`,`price`,`category_id`,`picture`) VALUES (?,?,?,?,?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    if($stmt === false) 
    {
        return "failed";
    }

    mysqli_stmt_bind_param($stmt, 'ssiis', $nama, $deskripsi, $harga, $kategori,$gambar  );
    $result = mysqli_stmt_execute($stmt);

    if(!$result)
        return false;
    
    mysqli_stmt_close($stmt);
    return true;  
}






function viewWadah ($koneksi){
    $sql ="SELECT * FROM  product";
    $stmt = mysqli_query($koneksi, $sql);

    if(mysqli_num_rows($stmt) > 0) 
        return mysqli_fetch_all($stmt, );
    else 
        return false;
}


?>