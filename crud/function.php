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
    $deskripsi = $data ['deskripsi'];
    $harga = $data ['harga'];
    $category = $data ['kategori'];
    

    $sql = "INSERT INTO barang (nama,deskripsi,harga) VALUES (?,?,?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    if($stmt === false) 
    {
        return "failed";
    }

    mysqli_stmt_bind_param($stmt, '', $nama, $deskripsi, $harga, $image);
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