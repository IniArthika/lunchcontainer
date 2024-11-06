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
    $image = $data ['image'];

    $sql = "INSERT INTO barang (nama,deskripsi,harga,image) VALUES (?,?,?,?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    if($stmt === false) 
    {
        return "failed";
    }

    mysqli_stmt_bind_param($stmt, '', $judul, $pengarang, $penerbit, $tahun, $genre);
    $result = mysqli_stmt_execute($stmt);

    if(!$result)
        return false;
    
    mysqli_stmt_close($stmt);
    return true;  
}


?>