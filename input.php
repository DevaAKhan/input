<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .i {
        width: 100%;
    }
    hr {
        border: 1px solid #030ffc;
    }
    .h {
        background-color: #0366fc;
        color: white;
    }
    .bb {
        border-radius: 10px;
        background-color: #4ef542;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
    .b {
        border-radius: 10px;
        background-color: #0366fc;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
    .container {
        border-radius: 10px;
        border: 1px solid black;
        background-color: white;
        width: 50%;
        padding-top: 1px;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
        padding-bottom: 15px;
    }
    .container2 {
        width: 50%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
</style>
<body>
    <div class="container">
        <form action="simpan.php" method="post" name="form_input">
            <div class="h">
                <hr>
                <h2 align="center">FORM INPUT MASTER dan Stock DATA BARANG</h2>
                <hr>
            </div>
            <div class="container2">
                <table class="table" id="form">
                    <tr>
                        <td>
                            <h4>Kode</h4>
                        </td>
                        <td>:</td>
                        <td>
                            AUTO
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Nama Produk</h4>
                        </td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Harga</h4>
                        </td>
                        <td>:</td>
                        <td><input type="number" name="harga" id="" class="i"></td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Satuan</h4>
                        </td>
                        <td>:</td>
                        <td>
                            <select name="satuan" id="" class="i">
                                <option value="-">Pilih</option>
                                <option value="Gelas">Gelas</option>
                                <option value="Mangkok">Mangkok</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Kategori</h4>
                        </td>
                        <td>:</td>
                        <td>
                            <select name="kat" id="" class="i">
                                <option value="-">Pilih</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>URL Gambar</h4>
                        </td>
                        <td>:</td>
                        <td>
                            <input type="url" name="url" id="" class="i">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Stok Awal</h4>
                            </tdidth="100px">
                        <td>:</td>
                        <td>
                            <input type="number" name="stok" id="" class="i">
                        </td>
                    </tr>
                </table>
            </div>
            <center>
                <input type="submit" value="Simpan" class="b">
                <input type="button" value="Lihat" onclick="window.location.href = 'tampil.php';" class="bb">
            </center>
        </form>
    </div>
    <br>
</body>
</html>
