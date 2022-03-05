<?php
    include('config/koneksi.php');
    
    $nama = $_POST['nama'];
    $tahun_lulus = $_POST['tahun_lulus'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_ijazah = $_POST['no_ijazah'];
    $no_skhun = $_POST['no_skhun'];
    $bukti_lunas_sos = $_POST['bukti_lunas_sos'];
    $tgl_kwitansi_sos = $_POST['tgl_kwitansi_sos'];
    $bukti_lunas_ijazah = $_POST['bukti_lunas_ijazah'];
    $tgl_kwitansi_ijazah = $_POST['tgl_kwitansi_ijazah'];
    // $jurusan = $_POST['jurusan'];
    $keterangan = $_POST['keterangan'];

    $add = mysqli_query($koneksi, "insert into ijazah 
        (
            nama,
            tahun_lulus,
            tempat_lahir,
            tanggal_lahir,
            no_ijazah,
            no_skhun,
            bukti_lunas_sos,
            tgl_kwitansi_sos,
            bukti_lunas_ijazah,
            tgl_kwitansi_ijazah,
            keterangan
        )
        values
        (   '$nama',
            '$tahun_lulus',
            '$tempat_lahir',
            '$tanggal_lahir',
            '$no_ijazah',
            '$no_skhun',
            '$bukti_lunas_sos',
            '$tgl_kwitansi_sos',
            '$bukti_lunas_ijazah',
            '$tgl_kwitansi_ijazah',
            '$keterangan'
        )");

    if ($add) {
        header('location:index.php');
    } else {
        echo mysqli_error($koneksi);
    }

