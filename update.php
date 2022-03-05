<?php
    include('config/koneksi.php');
    
    $id = $_POST['id'];
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
    $keterangan = $_POST['keterangan'];

    $update = mysqli_query($koneksi, "update ijazah set 
            nama = '$nama',
            tahun_lulus = '$tahun_lulus',
            tempat_lahir = '$tempat_lahir',
            tanggal_lahir = '$tanggal_lahir',
            no_ijazah = '$no_ijazah',
            no_skhun = '$no_skhun',
            bukti_lunas_sos = '$bukti_lunas_sos',
            tgl_kwitansi_sos = '$tgl_kwitansi_sos',
            bukti_lunas_ijazah = '$bukti_lunas_ijazah',
            tgl_kwitansi_ijazah = '$tgl_kwitansi_ijazah',
            keterangan = '$keterangan'
        
            where id='$id'");

    if ($update) {
        header('location:index.php');
    } else {
        echo mysqli_error($koneksi);
    }

