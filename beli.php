 <!DOCTYPE html>
 <html>
 <html lang="en">
 <title>Beli</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Beli</title>
 </head>
 <body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="simpan_beli.php" method="POST">
                <div class="card">
                <div class="card-header">
                        Data pemesanan
            </div>
            <div class="card-body">
                <div class="form-group">
                <label >Meja</label>
                <input type="text" class="form-control" name="meja" required>
            </div>

            <div class="form-group">
                <label >Nama</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            
            <div class="form-group">
                <label >Jenis_Menu</label>
                <input type="text" class="form-control" name="jenis_menu" required>
            </div>
            <div class="form-group">
                <label >Jumlah</label>
                <input type="text" class="form-control" name="jumlah" required>
            </div>
        </div>   
        <div class="card-footer">
    <button type="submit" name="submit" class="btn btn-success">Buat Pesanan</button>
    </div>
    </div>
    </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </body>
 </html>
