<?php

    include('config/koneksi.php');

    $id = $_POST['delid'];

    $delete = mysqli_query($koneksi, "delete from ijazah where id='$id'");

    if ($delete) {
        header('location:index.php');
    } else {
        echo mysqli_error($koneksi);
    }
    