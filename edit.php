<?php
    include('config/koneksi.php');
    
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "select * from ijazah where id='$id'");
    $data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Edit Data <?= $data['nama']; ?></h1>
            </div>
            <hr>
            <div class="col-12">
                <form action="update.php" method="post">
                    <div class="mb-3">
                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['id']; ?>">
                        <label for="nama" class="form-label">Nama lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                        <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" value="<?= $data['tahun_lulus']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $data['tempat_lahir']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $data['tanggal_lahir']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="no_ijazah" class="form-label">No. Ijazah</label>
                        <input type="text" class="form-control" id="no_ijazah" name="no_ijazah" value="<?= $data['no_ijazah']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="no_skhun" class="form-label">No. SKHUN</label>
                        <input type="text" class="form-control" id="no_skhun" name="no_skhun" value="<?= $data['no_skhun']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="bukti_lunas_sos" class="form-label">Bukti Lunas SOS</label>
                        <input type="text" class="form-control" id="bukti_lunas_sos" name="bukti_lunas_sos" value="<?= $data['bukti_lunas_sos']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_kwitansi_sos" class="form-label">Tgl Kwitansi SOS</label>
                        <input type="date" class="form-control" id="tgl_kwitansi_sos" name="tgl_kwitansi_sos" value="<?= $data['tgl_kwitansi_sos']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="bukti_lunas_ijazah" class="form-label">Bukti Lunas Ijazah</label>
                        <input type="text" class="form-control" id="bukti_lunas_ijazah" name="bukti_lunas_ijazah" value="<?= $data['bukti_lunas_ijazah']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_kwitansi_ijazah" class="form-label">Tgl Kwitansi Ijazah</label>
                        <input type="date" class="form-control" id="tgl_kwitansi_ijazah" name="tgl_kwitansi_ijazah" value="<?= $data['tgl_kwitansi_ijazah']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $data['keterangan']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>