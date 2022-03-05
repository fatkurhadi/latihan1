<?php
    include('config/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Negara</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tahun Lulus</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">No. Ijazah</th>
                    <th scope="col">No. SKHUN</th>
                    <th scope="col">Bukti Lunas SOS</th>
                    <th scope="col">Tgl Kwitansi SOS</th>
                    <th scope="col">Bukti Lunas Ijazah</th>
                    <th scope="col">Tgl Kwitansi Ijazah</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $data = mysqli_query($koneksi, 'select * from ijazah limit 10');
                    while ($a = mysqli_fetch_object($data)) {
                ?>
                        <tr>
                            <td><?= $a->id; ?></td>
                            <td><?= $a->nama; ?></td>
                            <td><?= $a->tahun_lulus; ?></td>
                            <td><?= $a->tempat_lahir; ?></td>
                            <td><?= $a->tanggal_lahir; ?></td>
                            <td><?= $a->no_ijazah; ?></td>
                            <td><?= $a->no_skhun; ?></td>
                            <td><?= $a->bukti_lunas_sos; ?></td>
                            <td><?= $a->tgl_kwitansi_sos; ?></td>
                            <td><?= $a->bukti_lunas_ijazah; ?></td>
                            <td><?= $a->tgl_kwitansi_ijazah; ?></td>
                            <td><?= $a->keterangan; ?></td>
                            <td class="d-flex">
                                <a href="edit.php?id=<?= $a->id; ?>" class="mx-1 btn btn-primary">Edit</a>
                                <!-- Button trigger modal -->
                                <button type="button" class="mx-1 btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                    data-id="<?= $a->id; ?>" data-nama="<?= $a->nama; ?>" data-lahir="<?= $a->tanggal_lahir; ?>"
                                    onclick="return del(this)">
                                    Delete
                                </button>
                            </td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-12">
        
                <form action="tambah.php" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                        <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus">
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="no_ijazah" class="form-label">No. Ijazah</label>
                        <input type="text" class="form-control" id="no_ijazah" name="no_ijazah">
                    </div>
                    <div class="mb-3">
                        <label for="no_skhun" class="form-label">No. SKHUN</label>
                        <input type="text" class="form-control" id="no_skhun" name="no_skhun">
                    </div>
                    <div class="mb-3">
                        <label for="bukti_lunas_sos" class="form-label">Bukti Lunas SOS</label>
                        <input type="text" class="form-control" id="bukti_lunas_sos" name="bukti_lunas_sos">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_kwitansi_sos" class="form-label">Tgl Kwitansi SOS</label>
                        <input type="date" class="form-control" id="tgl_kwitansi_sos" name="tgl_kwitansi_sos">
                    </div>
                    <div class="mb-3">
                        <label for="bukti_lunas_ijazah" class="form-label">Bukti Lunas Ijazah</label>
                        <input type="text" class="form-control" id="bukti_lunas_ijazah" name="bukti_lunas_ijazah">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_kwitansi_ijazah" class="form-label">Tgl Kwitansi Ijazah</label>
                        <input type="date" class="form-control" id="tgl_kwitansi_ijazah" name="tgl_kwitansi_ijazah">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan">
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>

    </div>
  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Hapus nama</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
            Hapus data dengan nama <span id="delnama"></span> dan tanggal lahir <span id="dellahir"></span>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <form action="delete.php" method="POST">
            <input type="hidden" id="delid" name="delid">
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function del() {
            $('#deleteModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id')
            var nama = button.data('nama')
            var lahir = button.data('lahir')

            var modal = $(this)
            modal.find('.modal-title').text('Delete ' + nama)
            modal.find('.modal-footer #delid').val(id)
            modal.find('.modal-body #delnama').text(nama)
            modal.find('.modal-body #dellahir').text(lahir)
            })
        }
    </script>
</body>
</html>