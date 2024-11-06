<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Input Data Product</title>
</head>
<body>
    



    <form action="data.php" enctype="multipart/form-data" method="POST" >
        <!-- input nama : single line text input  -->
        <center>
            <h4>Form Input Data Barang</h4>
                <table>
                    <tr>
                        <td>
                            Nama Barang
                        </td>
                        <td>
                            <input type="text" placeholder="Nama Barang" name="nama" value="" ></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Deskripsi
                        </td>
                        <td>
                            <textarea type="text" placeholder="Deskripsi" name="deskripsi" id="" cols="30" rows="10"></textarea><br/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Harga
                        </td>
                        <td>
                            <input type="number" placeholder="Harga" name="harga" value="" ><br/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Kategori_id
                        </td>
                        <td>
                            <select name="kategori_id" id="">
                                <option value="0">--Pilih Kategori Id--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select> <br/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Foto
                        </td>
                        <td>
                        <input type="file" name="image" placeholder="Foto" id=""><br/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                        <button>Submit</button>
                        </td>
                    </tr>
                </table>
        </center>
    </form>
    
</body>
</html>