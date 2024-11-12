<?php 
    require_once "../crud/config.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TUPPERWARE: Input Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <h2>Input Barang </h2>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" name="nama" >
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" >
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="number" class="form-control" name="harga" >
                    </div>
                    
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Kategori</label>
                        <select class="form-select" name="kategori">
                                <option selected value="0">--Pilih Kategori--</option>
                                <option value="1">Tumbler</option>
                                <option value="2">Bekal</option>
                                <option value="3">One Set(tumbler & bekal)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="coverBuku">Gambar Barang</label>
                        <input type="file" name="gambar" id="" class="form-control" />
                    </div>
    

                    <div class="mb-3">
                        <input type="submit" value="Input Data Barang" class="btn btn-primary" name="btnInputBarang">
                    </div>


                </form>
            </div>
        </div>
    </div>
    
    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>